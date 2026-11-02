"use strict";

let spinner = document.querySelector("#roulette");
let currentRotation = 0;
let isSpinning = false;

document.querySelector('#spin').onclick = spin;

function spin() {
    let balanceSpan = document.querySelector("#balance");
    let balance = parseFloat(balanceSpan.textContent);
    let betAmount = parseFloat(document.querySelector("#betAmount").value);

    if(betAmount > balance) {
        alert("Vous être trop pauvre pour miser cette somme !");
        return;
    }

    if(isNaN(betAmount) || betAmount <= 0){
        alert("merci de rentrer une somme");
        return;
    }

    if (isSpinning) return;
    isSpinning = true;

    fetch('/api/spin', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ betAmount: betAmount })
    })
    .then(res => {
        if(!res.ok) {
            return res.JSON().then(err => {
                alert(err);
                isSpinning = false;
                throw new Error(err);
            });
        }

        else return res.json();
    })
    .then(data => {
        let targetAngle = data.angle;
        let completedTurns = Math.ceil(currentRotation / 360);

        currentRotation = (completedTurns + 5) * 360 + targetAngle;

        spinner.style.transition = "transform 4s cubic-bezier(0.15, 0.9, 0.2, 1)";
        spinner.style.transform = `rotate(${currentRotation}deg)`;

        setTimeout(() => {
            isSpinning = false;
            balanceSpan.textContent = data.newBalance;
            document.querySelector("#nav-user-balance").textContent = data.newBalance;
        }, 4000);
    })
    .catch(err => {
        console.log("Erreur réseau :", err);
        isSpinning = false;
    });
}