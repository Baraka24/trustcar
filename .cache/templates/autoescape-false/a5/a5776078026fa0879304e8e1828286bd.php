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

/* partials/alternates.html.twig */
class __TwigTemplate_a98e8dd990d0a2bb5dfe31057d3c11fe extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ( !array_key_exists("alternates", $context)) {
            $context["alternates"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "alternates", [], "any", false, false, false, 1);
        }
        // line 2
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alternates", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "alternates", [], "any", false, false, false, 2))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            if ( !array_key_exists("title", $context)) {
                $context["title"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3);
            }
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alternates"]) || array_key_exists("alternates", $context) ? $context["alternates"] : (function () { throw new RuntimeError('Variable "alternates" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                // line 5
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 5) == "canonical") && (($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 5), "url", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "canonical", [], "any", false, false, false, 5), "url", [], "any", false, false, false, 5))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    yield "
    <link rel=\"canonical\" type=\"text/html\" title=\"";
                    // line 6
                    yield (string) ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 6), "title", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "canonical", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })())))) : (Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()))));
                    yield "\" href=\"";
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "canonical", [], "any", false, false, false, 6), "url", [], "any", false, false, false, 6));
                    yield "\">";
                } else {
                    // line 7
                    yield "
    <link rel=\"";
                    // line 8
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 8);
                    yield "\" type=\"";
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "type", [], "any", false, false, false, 8);
                    yield "\" title=\"";
                    yield (string) Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()));
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8) != "html")) {
                        yield " (";
                        yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "title", [], "any", false, false, false, 8);
                        yield ")";
                    }
                    yield "\" href=\"";
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), ["canonical" => true, "format" => CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8)]);
                    yield "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/alternates.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  71 => 8,  68 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/alternates.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/alternates.html.twig");
    }
}
