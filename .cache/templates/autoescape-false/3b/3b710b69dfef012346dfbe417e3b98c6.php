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

/* partials/feeds-from-section.html.twig */
class __TwigTemplate_f4db3c1bc403b20152dcea87ace4420a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["feed_formats"] = ["atom", "rss", "jsonfeed"];
        // line 2
        if (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "section", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "section", [], "any", false, false, false, 2))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2) == "page"))) {
            // line 3
            $context["section_page"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "page", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "section", [], "any", false, false, false, 3)], "method", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "page", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "section", [], "any", false, false, false, 3)], "method", false, false, false, 3))) : (""));
            // line 4
            if (((($tmp = (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::getAttribute($this->env, $this->source, ($context["section_page"] ?? null), "alternates", [], "any", true, true, false, 4))) {
                // line 5
                yield (string) $this->env->getRuntime('Twig\Extra\Cache\CacheRuntime')->getCache()->get($this->extensions['Cecil\Renderer\Extension\Core']->cacheKey($context, "feeds-from-section", (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 5, $this->source); })())), function (\Symfony\Contracts\Cache\ItemInterface $item) use ($context, $macros, $blocks) {
                    return \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 6
                        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates.html.twig", ["title" => (($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)) . " - ") . $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6))), "page" => (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "alternates" => Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "alternates", [], "any", false, false, false, 6), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 6, $this->source); })()), "format", [], "any", false, false, false, 6), (isset($context["feed_formats"]) || array_key_exists("feed_formats", $context) ? $context["feed_formats"] : (function () { throw new RuntimeError('Variable "feed_formats" does not exist.', 6, $this->source); })())); })], false);
                        return; yield;
                    })());;
                })
;
            }
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/feeds-from-section.html.twig";
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
        return array (  58 => 6,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/feeds-from-section.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/feeds-from-section.html.twig");
    }
}
