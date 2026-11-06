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

/* partials/alternates-languages.html.twig */
class __TwigTemplate_cb1f479ffc40dab1fab01a45917abac7 extends Template
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
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "translations", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "translations", [], "any", false, false, false, 1), [])) : ([]))) >= 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", true, true, false, 1))) {
            // line 2
            yield "
    <link rel=\"alternate\" hreflang=\"";
            // line 3
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "language", [], "any", false, false, false, 3);
            yield "\" href=\"";
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), ["canonical" => true]);
            yield "\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "translations", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                yield "
    <link rel=\"alternate\" hreflang=\"";
                // line 6
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 6);
                yield "\" href=\"";
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["alternate"], ["canonical" => true]);
                yield "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 9
            $context["defaultLanguage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "language", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "language", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "language", [], "any", false, false, false, 9))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "language", [], "any", false, false, false, 9)));
            // line 10
            $context["defaultPage"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "language", [], "any", false, false, false, 10) == (isset($context["defaultLanguage"]) || array_key_exists("defaultLanguage", $context) ? $context["defaultLanguage"] : (function () { throw new RuntimeError('Variable "defaultLanguage" does not exist.', 10, $this->source); })()))) ? ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })())) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "translations", [], "any", false, false, false, 10), function ($__translation__) use ($context, $macros) { $context["translation"] = $__translation__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 10, $this->source); })()), "language", [], "any", false, false, false, 10) == (isset($context["defaultLanguage"]) || array_key_exists("defaultLanguage", $context) ? $context["defaultLanguage"] : (function () { throw new RuntimeError('Variable "defaultLanguage" does not exist.', 10, $this->source); })())); }))));
            // line 11
            if ((($tmp = (isset($context["defaultPage"]) || array_key_exists("defaultPage", $context) ? $context["defaultPage"] : (function () { throw new RuntimeError('Variable "defaultPage" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
                // line 12
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["defaultPage"]) || array_key_exists("defaultPage", $context) ? $context["defaultPage"] : (function () { throw new RuntimeError('Variable "defaultPage" does not exist.', 12, $this->source); })()), ["canonical" => true]);
                yield "\">";
            }
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/alternates-languages.html.twig";
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
        return array (  78 => 12,  74 => 11,  72 => 10,  70 => 9,  60 => 6,  54 => 5,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/alternates-languages.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/alternates-languages.html.twig");
    }
}
