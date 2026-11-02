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

/* @TogglePassword/form_theme.html.twig */
class __TwigTemplate_267e99f44b89509f722f90da3f551db9 extends Template
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

        $this->blocks = [
            'ux_toggle_password_widget' => [$this, 'block_ux_toggle_password_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('ux_toggle_password_widget', $context, $blocks);
        return; yield;
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ux_toggle_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(($context["toggle_container_classes"] ?? null), " "), "html", null, true);
        yield "\">";
        yield from         $this->unwrap()->yieldBlock("password_widget", $context, $blocks);
        yield "</div>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@TogglePassword/form_theme.html.twig";
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
        return array (  59 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@TogglePassword/form_theme.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\vendor\\symfony\\ux-toggle-password\\templates\\form_theme.html.twig");
    }
}
