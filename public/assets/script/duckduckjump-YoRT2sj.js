"use strict";

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById("canvas");
    const riveUrl = canvas.dataset.riveUrl;

    let jumpTrigger = null;
    let deathTrigger = null;
    let isPlaying;

    const r = new rive.Rive({
        src: riveUrl,
        canvas: document.getElementById("canvas"),
        autoplay: true,
        stateMachine: "State Machine 1",
        onLoad: () => {
            r.resizeDrawingSurfaceToCanvas();

            const triggers = r.stateMachineInputs("State Machine 1");
            jumpTrigger = triggers.find(i => i.name === 'doJump');
            deathTrigger = triggers.find(i => i.name === 'doDie');
        },
    });

    let balanceSpan = document.querySelector("#balance");
    let multiplierSpan = document.querySelector("#multiplier");

    document.querySelector("#play").onclick = play;

    function play() {

        let balance = parseFloat(balanceSpan.textContent);
        let betAmount = parseFloat(document.querySelector("#betAmount").value);

        if(betAmount > balance) {
            alert("Vous être trop pauvre pour miser cette somme !");
            return;
        }

        if(isNaN(betAmount) || betAmount <= 0){
            alert("Merci de rentrer une somme");
        return;
        }

        fetch('/api/duck_duck_jump/start', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                betAmount: betAmount,
                multiplier: 0
            })
        })
        .then(res => res.json())
        .then(data => {
            if(data.status !==  'started'){
                alert("Merci de commencer une partie");
                return;
            }

            isPlaying = true;
            balanceSpan.textContent = balance - betAmount;
            
            setupGameControls();
        })
        .catch(err => {
            console.log("Érreur réseau : " + err);
        });

    }

    function setupGameControls(){
        const controls = document.querySelector("#controls");
        controls.innerHTML = "";

        let continueBtn = document.createElement("button");
        continueBtn.innerHTML = "Avancer";

        let cashoutBtn = document.createElement("button");
        cashoutBtn.innerHTML = "Encaisser";

        continueBtn.onclick = () => {
            fetch('/api/duck_duck_jump/step', { method: 'POST' })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'win') {
                    multiplierSpan.textContent = "X" + data.multiplier;
                    if (jumpTrigger) jumpTrigger.fire();
                } 
                
                else {
                    if (deathTrigger) deathTrigger.fire();
                    setTimeout(() => {reset();}, 1500);
                }
            });
        }

        cashoutBtn.onclick = () => {
            fetch('/api/duck_duck_jump/cashout', { method: 'POST' })
            .then(res => res.json())
            .then(newBalance => {
                balanceSpan.textContent = newBalance;
                document.querySelector("#nav-user-balance").textContent = data.newBalance;
                reset();
            });
        }

        controls.append(continueBtn, cashoutBtn);
    }

    function reset() {
        
        if (r) {
            r.load({
                src: riveUrl,
                stateMachines: "State Machine 1",
                autoplay: true,
                onLoad: () => {
                    r.resizeDrawingSurfaceToCanvas();
                    const triggers = r.stateMachineInputs("State Machine 1");
                    jumpTrigger = triggers.find(i => i.name === 'doJump');
                    deathTrigger = triggers.find(i => i.name === 'doDie');
                }
            });
        }

        multiplierSpan.textContent = "X0";
        const controls = document.querySelector("#controls");
        controls.innerHTML = "";

        let playBtn = document.createElement("button");
        playBtn.id = "play";
        playBtn.innerHTML = "Commencer une partie";
        playBtn.onclick = play;

        controls.append(playBtn);
        isPlaying = false;
    }
});