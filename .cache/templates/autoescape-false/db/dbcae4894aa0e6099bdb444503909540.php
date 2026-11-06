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

/* partials/navigation.html.twig */
class __TwigTemplate_68b968f2a36947f5850b681b92c88784 extends Template
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
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 2, $this->source); })())) > 1)) {
            // line 3
            $context["current_url"] = (((($tmp = ((array_key_exists("page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()))) : (null));
            yield "
      <nav>
        <ul>";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Cecil\Renderer\Extension\Collection']->sortByWeight(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "menus", [], "any", false, false, false, 6), (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 6, $this->source); })()), [], "array", false, false, false, 6)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                $context["item_url"] = $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7));
                // line 8
                $context["current"] = ((((($tmp = (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((isset($context["item_url"]) || array_key_exists("item_url", $context) ? $context["item_url"] : (function () { throw new RuntimeError('Variable "item_url" does not exist.', 8, $this->source); })()) == (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 8, $this->source); })())))) ? ("page") : (((((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "section", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "section", [], "any", false, false, false, 8))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 8) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "section", [], "any", false, false, false, 8)))) ? ("true") : (null))));
                yield "
          <li><a href=\"";
                // line 9
                yield (string) (isset($context["item_url"]) || array_key_exists("item_url", $context) ? $context["item_url"] : (function () { throw new RuntimeError('Variable "item_url" does not exist.', 9, $this->source); })());
                yield "\" data-weight=\"";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 9);
                yield "\"";
                if ((($tmp = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " aria-current=\"";
                    yield (string) (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 9, $this->source); })());
                    yield "\"";
                }
                yield ">";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 9);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 10
            yield "
        </ul>
      </nav>";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navigation.html.twig";
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
        return array (  79 => 10,  61 => 9,  57 => 8,  55 => 7,  51 => 6,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/navigation.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/navigation.html.twig");
    }
}
