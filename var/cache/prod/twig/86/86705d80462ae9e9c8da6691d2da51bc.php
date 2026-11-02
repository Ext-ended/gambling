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

/* daisyui_5_layout.html.twig */
class __TwigTemplate_afed2da34e87301b78fac1a3f5e0afa5 extends Template
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

        $this->parent = false;

        $this->ensureTraitsAllowed();

        // line 1
        $_trait_0 = $this->load("form_div_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
                'form_label' => [$this, 'block_form_label'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'range_widget' => [$this, 'block_range_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 8
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 14
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 24
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 29
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 34
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 39
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 44
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 74
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 79
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 84
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 89
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 94
        yield from $this->unwrap()->yieldBlock('range_widget', $context, $blocks);
        // line 100
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 106
        yield "
";
        // line 107
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 4), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "flex flex-col mb-6")) : ("flex flex-col mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "flex flex-col mb-6")) : ("flex flex-col mb-6"))))]);
        // line 5
        yield from $this->yieldParentBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["widget_errors_class"] = ((array_key_exists("widget_errors_class", $context)) ? (($context["widget_errors_class"] ?? null)) : ("input-error"));
        // line 10
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 10), ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) . ((((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["widget_errors_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ((" " . ($context["widget_errors_class"] ?? null))) : ("")))]);
        // line 11
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        return; yield;
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 16
            yield "<ul>";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "<li class=\"";
                yield (string) $this->escaper->escape(((array_key_exists("error_item_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["error_item_class"] ?? null), "text-error")) : ("text-error")), "html", null, true);
                yield "\" id=\"";
                yield (string) $this->escaper->escape(((($context["id"] ?? null) . "_error") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "</li>";
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
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 20
            yield "</ul>";
        }
        return; yield;
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 25), "mt-1 label")) : ("mt-1 label")))]);
        // line 26
        yield from $this->yieldParentBlock("form_help", $context, $blocks);
        return; yield;
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 30), ((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "label")) : ("label")))) : (((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "label")) : ("label"))))]);
        // line 31
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "btn-neutral")) : ("btn-neutral")) . " btn"))]);
        // line 36
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 40), "btn-primary")) : ("btn-primary")))]);
        // line 41
        yield from $this->yieldParentBlock("submit_widget", $context, $blocks);
        return; yield;
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "mt-2")) : ("mt-2"))]);
        // line 46
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            yield "            <label class=\"flex items-center label mb-2\">";
            // line 49
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 50
            if ( !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 50), "label", [], "any", false, false, false, 50) === false)) {
                // line 51
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null), "label_attr" => ["class" => ""]]);
            }
            // line 53
            yield "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "</div>";
        return; yield;
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 59), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 60
        $context["widget_attr"] = [];
        // line 61
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 62
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 64
        yield "<div";
        $_v0 = $context;
        $_v1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 64, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 65
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 66
        yield "<label class=\"flex items-center label mb-2\">";
        // line 67
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 68
        yield from         $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
        // line 69
        yield "</label>";
        // line 70
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 71
        yield "</div>";
        return; yield;
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        $context["widget_class"] = (((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "checkbox")) : ("checkbox")) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checkbox-error") : ("")));
        // line 76
        yield from $this->yieldParentBlock("checkbox_widget", $context, $blocks);
        return; yield;
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        $context["widget_class"] = (((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "radio")) : ("radio")) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" radio-error") : ("")));
        // line 81
        yield from $this->yieldParentBlock("radio_widget", $context, $blocks);
        return; yield;
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 85), "")) : ("")) . " select mt-2"))]);
        // line 86
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        return; yield;
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 90), "")) : ("")) . " textarea mt-2"))]);
        // line 91
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        return; yield;
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "range")) : ("range"));
        // line 96
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "range mt-2")) : ("range mt-2"));
        // line 97
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
        // line 102
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "file-input mt-2")) : ("file-input mt-2"));
        // line 103
        $context["widget_errors_class"] = "file-input-error";
        // line 104
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["hidden", "range", "file"]))) {
            // line 109
            $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "input mt-2")) : ("input mt-2"));
        }
        // line 112
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "daisyui_5_layout.html.twig";
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
        return array (  442 => 112,  439 => 109,  437 => 108,  430 => 107,  425 => 104,  423 => 103,  421 => 102,  419 => 101,  412 => 100,  407 => 97,  405 => 96,  403 => 95,  396 => 94,  391 => 91,  389 => 90,  382 => 89,  377 => 86,  375 => 85,  368 => 84,  363 => 81,  361 => 80,  354 => 79,  349 => 76,  347 => 75,  340 => 74,  335 => 71,  333 => 70,  331 => 69,  329 => 68,  327 => 67,  325 => 66,  323 => 65,  311 => 64,  308 => 62,  306 => 61,  304 => 60,  302 => 59,  295 => 58,  290 => 55,  282 => 53,  279 => 51,  277 => 50,  275 => 49,  273 => 48,  269 => 47,  265 => 46,  263 => 45,  256 => 44,  251 => 41,  249 => 40,  242 => 39,  237 => 36,  235 => 35,  228 => 34,  223 => 31,  221 => 30,  214 => 29,  209 => 26,  207 => 25,  200 => 24,  194 => 20,  173 => 18,  156 => 17,  154 => 16,  152 => 15,  145 => 14,  140 => 11,  138 => 10,  136 => 9,  129 => 8,  124 => 5,  122 => 4,  115 => 3,  110 => 107,  107 => 106,  105 => 100,  103 => 94,  101 => 89,  99 => 84,  97 => 79,  95 => 74,  93 => 58,  91 => 44,  89 => 39,  87 => 34,  85 => 29,  83 => 24,  81 => 14,  79 => 8,  77 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "daisyui_5_layout.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\daisyui_5_layout.html.twig");
    }
}
