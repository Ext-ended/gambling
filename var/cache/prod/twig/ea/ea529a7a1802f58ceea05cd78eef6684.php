<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* duck_duck_jump/leaderboard.html.twig */
class __TwigTemplate_e8c8f13f897b28b1d5f6d22283b67c59 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Les meilleurs paries sur Duck Duck Jump";
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->load("includes/header.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/leaderboard.css"), "html", null, true);
        yield "\"></link>
</head>

<body>
<header>
<div class=\"leaderboard\">
    <select name=\"limit\" id=\"duck-duck-jump-leaderboard-limit\" onchange=\"window.location.href = this.value\">
        <option value=\"";
        // line 15
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" =>         // line 16
($context["sort"] ?? null), "direction" => ($context["direction"] ?? null), "limit" => "20", "page" => ($context["page"] ?? null), "user" => ($context["user"] ?? null)]), "html", null, true);
        yield "\"
            ";
        // line 17
        yield (string) (((($context["limit"] ?? null) == 20)) ? ("selected") : (""));
        yield ">20
        </option>
        <option value=\"";
        // line 19
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" =>         // line 20
($context["sort"] ?? null), "direction" => ($context["direction"] ?? null), "limit" => "50", "page" => ($context["page"] ?? null), "user" => ($context["user"] ?? null)]), "html", null, true);
        yield "\"
            ";
        // line 21
        yield (string) (((($context["limit"] ?? null) == 50)) ? ("selected") : (""));
        yield ">50
        </option>
        <option value=\"";
        // line 23
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" =>         // line 24
($context["sort"] ?? null), "direction" => ($context["direction"] ?? null), "limit" => "100", "page" => ($context["page"] ?? null), "user" => ($context["user"] ?? null)]), "html", null, true);
        yield "\"
            ";
        // line 25
        yield (string) (((($context["limit"] ?? null) == 100)) ? ("selected") : (""));
        yield ">100
        </option>
    </select>

    <form method=\"GET\" action=\"";
        // line 29
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard");
        yield "\">
        <input type=\"hidden\" name=\"sort\" value=\"";
        // line 30
        yield (string) $this->escaper->escape(($context["sort"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"direction\" value=\"";
        // line 31
        yield (string) $this->escaper->escape(($context["direction"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"limit\" value=\"";
        // line 32
        yield (string) $this->escaper->escape(($context["limit"] ?? null), "html", null, true);
        yield "\">

        <div class=\"leaderboard-input\">
            <label for=\"user\">Rechercher un utilisateur</label>
            <input type=\"text\" id=\"user\" name=\"user\" value=\"";
        // line 36
        yield (string) (((array_key_exists("user", $context) &&  !(null === $context["user"]))) ? ($this->escaper->escape($context["user"], "html", null, true)) : (""));
        yield "\" placeholder=\"Nom d\x27utilisateur\">
            <button type=\"submit\">Chercher</button>
        </div>
    </form>
    </div>
</header>
    <table class=\"leaderboard-table\">
        <thead>
            <tr>
                <th scope=\"col\">Rang</th>
                <th scope=\"col\">
                    <a href=\"";
        // line 47
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" => "player_id", "direction" => ((((        // line 49
($context["sort"] ?? null) == "player_id") && (($context["direction"] ?? null) == "DESC"))) ? ("ASC") : ("DESC")), "limit" =>         // line 50
($context["limit"] ?? null), "page" =>         // line 51
($context["page"] ?? null), "user" =>         // line 52
($context["user"] ?? null)]), "html", null, true);
        yield "\">
                    Joueur ";
        // line 53
        yield (string) ((((($context["sort"] ?? null) == "player_id") && (($context["direction"] ?? null) == "DESC"))) ? ("&#9652;") : ("&#9662;"));
        yield "
                    </a>
                </th>
                <th scope=\"col\">
                    <a href=\"";
        // line 57
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" => "betAmount", "direction" => ((((        // line 59
($context["sort"] ?? null) == "betAmount") && (($context["direction"] ?? null) == "DESC"))) ? ("ASC") : ("DESC")), "limit" =>         // line 60
($context["limit"] ?? null), "page" =>         // line 61
($context["page"] ?? null), "user" =>         // line 62
($context["user"] ?? null)]), "html", null, true);
        yield "\">
                        Argent miser ";
        // line 63
        yield (string) ((((($context["sort"] ?? null) == "betAmount") && (($context["direction"] ?? null) == "DESC"))) ? ("&#9652;") : ("&#9662;"));
        yield "
                    </a>
                </th>
                <th scope=\"col\">
                    <a href=\"";
        // line 67
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" => "multiplier", "direction" => ((((        // line 69
($context["sort"] ?? null) == "multiplier") && (($context["direction"] ?? null) == "DESC"))) ? ("ASC") : ("DESC")), "limit" =>         // line 70
($context["limit"] ?? null), "page" =>         // line 71
($context["page"] ?? null), "user" =>         // line 72
($context["user"] ?? null)]), "html", null, true);
        yield "\">
                        Multiplicateur ";
        // line 73
        yield (string) ((((($context["sort"] ?? null) == "multiplier") && (($context["direction"] ?? null) == "DESC"))) ? ("&#9652;") : ("&#9662;"));
        yield "
                    </a>
                </th>
                <th scope=\"col\">
                    <a href=\"";
        // line 77
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" => "payout", "direction" => ((((        // line 79
($context["sort"] ?? null) == "payout") && (($context["direction"] ?? null) == "DESC"))) ? ("ASC") : ("DESC")), "limit" =>         // line 80
($context["limit"] ?? null), "page" =>         // line 81
($context["page"] ?? null), "user" =>         // line 82
($context["user"] ?? null)]), "html", null, true);
        yield "\">
                        Gain ";
        // line 83
        yield (string) ((((($context["sort"] ?? null) == "payout") && (($context["direction"] ?? null) == "DESC"))) ? ("&#9652;") : ("&#9662;"));
        yield "
                    </a>
                </th >
                <th scope=\"col\">
                    <a href=\"";
        // line 87
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" => "createdAt", "direction" => ((((        // line 89
($context["sort"] ?? null) == "createdAt") && (($context["direction"] ?? null) == "DESC"))) ? ("ASC") : ("DESC")), "limit" =>         // line 90
($context["limit"] ?? null), "page" =>         // line 91
($context["page"] ?? null), "user" =>         // line 92
($context["user"] ?? null)]), "html", null, true);
        yield "\">
                        Date et heure ";
        // line 93
        yield (string) ((((($context["sort"] ?? null) == "createdAt") && (($context["direction"] ?? null) == "DESC"))) ? ("&#9652;") : ("&#9662;"));
        yield "
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["duckDuckJumpHistoryRepositories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["duckDuckJumpHistoryRepository"]) {
            // line 100
            yield "                <tr class=\"rank-";
            yield (string) $this->escaper->escape((((($context["page"] ?? null) - 1) * ($context["limit"] ?? null)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 100)), "html", null, true);
            yield "\">
                    <td class=\"rank-";
            // line 101
            yield (string) $this->escaper->escape((((($context["page"] ?? null) - 1) * ($context["limit"] ?? null)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 101)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape((((($context["page"] ?? null) - 1) * ($context["limit"] ?? null)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 101)), "html", null, true);
            yield "</td>
                    <td class=\"user\">
                        <img src=\"";
            // line 103
            yield (string) $this->escaper->escape(("/uploads/profiles/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "playerId", [], "any", false, false, false, 103), "image", [], "any", false, false, false, 103)), "html", null, true);
            yield "\" alt=\"profile\" class=\"profile\">
                        <span class=\"username\">";
            // line 104
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "playerId", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104), "html", null, true);
            yield "</span>
                    </td>
                    <td class=\"betAmount\">";
            // line 106
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "betAmount", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                    <td class=\"multiplier\">";
            // line 107
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "multiplier", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                    <td class=\"payout\">";
            // line 108
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "payout", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                    <td class=\"createdAt\">";
            // line 109
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["duckDuckJumpHistoryRepository"], "createdAt", [], "any", false, false, false, 109), "d/m/Y H:i:s"), "html", null, true);
            yield "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['duckDuckJumpHistoryRepository'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 112
        yield "        </tbody>
    </table>

    <div class=\"arrows\">
        ";
        // line 116
        if ((($context["page"] ?? null) > 1)) {
            // line 117
            yield "            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" =>             // line 118
($context["sort"] ?? null), "direction" =>             // line 119
($context["direction"] ?? null), "limit" =>             // line 120
($context["limit"] ?? null), "page" => (            // line 121
($context["page"] ?? null) - 1), "user" =>             // line 122
($context["user"] ?? null)]), "html", null, true);
            yield "\">
                        <span>←</span>
            </a>
        ";
        }
        // line 125
        yield " 
            ";
        // line 126
        yield (string) $this->escaper->escape(($context["page"] ?? null), "html", null, true);
        yield " sur ";
        yield (string) $this->escaper->escape(($context["totalPages"] ?? null), "html", null, true);
        yield "
        ";
        // line 127
        if ((($context["page"] ?? null) < ($context["totalPages"] ?? null))) {
            // line 128
            yield "            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard", ["sort" =>             // line 129
($context["sort"] ?? null), "direction" =>             // line 130
($context["direction"] ?? null), "limit" =>             // line 131
($context["limit"] ?? null), "page" => (            // line 132
($context["page"] ?? null) + 1), "user" =>             // line 133
($context["user"] ?? null)]), "html", null, true);
            yield "\">
                        <span>→</span>
            </a>
        ";
        }
        // line 136
        yield " 
    </div>
</body>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "duck_duck_jump/leaderboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  345 => 136,  338 => 133,  337 => 132,  336 => 131,  335 => 130,  334 => 129,  332 => 128,  330 => 127,  324 => 126,  321 => 125,  314 => 122,  313 => 121,  312 => 120,  311 => 119,  310 => 118,  308 => 117,  306 => 116,  300 => 112,  282 => 109,  278 => 108,  274 => 107,  270 => 106,  265 => 104,  261 => 103,  254 => 101,  249 => 100,  232 => 99,  223 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 87,  208 => 83,  204 => 82,  203 => 81,  202 => 80,  201 => 79,  200 => 77,  193 => 73,  189 => 72,  188 => 71,  187 => 70,  186 => 69,  185 => 67,  178 => 63,  174 => 62,  173 => 61,  172 => 60,  171 => 59,  170 => 57,  163 => 53,  159 => 52,  158 => 51,  157 => 50,  156 => 49,  155 => 47,  141 => 36,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  115 => 25,  111 => 24,  110 => 23,  105 => 21,  101 => 20,  100 => 19,  95 => 17,  91 => 16,  90 => 15,  80 => 8,  77 => 7,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "duck_duck_jump/leaderboard.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\templates\\duck_duck_jump\\leaderboard.html.twig");
    }
}
