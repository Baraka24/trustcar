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

/* partials/highlight.css.twig */
class __TwigTemplate_09323b5c8f850c9f186a78426c9b6a34 extends Template
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
        $context["highlight_engine"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "pages", [], "any", false, true, false, 2), "body", [], "any", false, true, false, 2), "highlight", [], "any", false, true, false, 2), "engine", [], "any", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2), "body", [], "any", false, false, false, 2), "highlight", [], "any", false, false, false, 2), "engine", [], "any", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2), "body", [], "any", false, false, false, 2), "highlight", [], "any", false, false, false, 2), "engine", [], "any", false, false, false, 2)) : ("highlightjs"));
        yield "
      /* Atom One Light / Atom One Dark colors (dark colors follow the color scheme and the theme selector) */
      :root {
        --cecil-hl-base: #383a42;
        --cecil-hl-comment: #a0a1a7;
        --cecil-hl-keyword: #a626a4;
        --cecil-hl-red: #e45649;
        --cecil-hl-cyan: #0184bb;
        --cecil-hl-green: #50a14f;
        --cecil-hl-orange: #986801;
        --cecil-hl-blue: #4078f2;
        --cecil-hl-yellow: #c18401;
      }
      @media only screen and (prefers-color-scheme: dark) {
        :root:not([data-theme=light]) {
          --cecil-hl-base: #abb2bf;
          --cecil-hl-comment: #5c6370;
          --cecil-hl-keyword: #c678dd;
          --cecil-hl-red: #e06c75;
          --cecil-hl-cyan: #56b6c2;
          --cecil-hl-green: #98c379;
          --cecil-hl-orange: #d19a66;
          --cecil-hl-blue: #61aeee;
          --cecil-hl-yellow: #e6c07b;
        }
      }
      [data-theme=dark] {
        --cecil-hl-base: #abb2bf;
        --cecil-hl-comment: #5c6370;
        --cecil-hl-keyword: #c678dd;
        --cecil-hl-red: #e06c75;
        --cecil-hl-cyan: #56b6c2;
        --cecil-hl-green: #98c379;
        --cecil-hl-orange: #d19a66;
        --cecil-hl-blue: #61aeee;
        --cecil-hl-yellow: #e6c07b;
      }";
        // line 39
        if (((isset($context["highlight_engine"]) || array_key_exists("highlight_engine", $context) ? $context["highlight_engine"] : (function () { throw new RuntimeError('Variable "highlight_engine" does not exist.', 39, $this->source); })()) == "tempest")) {
            yield "
      /* tempest/highlight */
      .hl-keyword {
        color: var(--cecil-hl-keyword);
      }
      .hl-property {
        color: var(--cecil-hl-blue);
      }
      .hl-type {
        color: var(--cecil-hl-yellow);
      }
      .hl-generic {
        color: var(--cecil-hl-orange);
      }
      .hl-value {
        color: var(--cecil-hl-green);
      }
      .hl-variable {
        color: var(--cecil-hl-red);
      }
      .hl-comment,
      .hl-comment span {
        color: var(--cecil-hl-comment);
        font-style: italic;
      }
      .hl-attribute,
      .hl-em {
        font-style: italic;
      }
      .hl-strong {
        font-weight: bold;
      }
      .hl-blur {
        filter: blur(2px);
      }
      .hl-addition {
        background-color: #00ff0033;
      }
      .hl-deletion {
        background-color: #ff000022;
      }
      .hl-gutter {
        display: inline-block;
        margin-right: 1ch;
        padding: 0 1ch;
        color: var(--cecil-hl-comment);
      }";
        } else {
            // line 86
            yield "
      /* highlight.js, by Daniel Gamage */
      .hljs {
        color: var(--cecil-hl-base);
      }
      .hljs-comment,
      .hljs-quote {
        color: var(--cecil-hl-comment);
        font-style: italic;
      }
      .hljs-doctag,
      .hljs-keyword,
      .hljs-formula {
        color: var(--cecil-hl-keyword);
      }
      .hljs-section,
      .hljs-name,
      .hljs-selector-tag,
      .hljs-deletion,
      .hljs-subst {
        color: var(--cecil-hl-red);
      }
      .hljs-literal {
        color: var(--cecil-hl-cyan);
      }
      .hljs-string,
      .hljs-regexp,
      .hljs-addition,
      .hljs-attribute,
      .hljs-meta .hljs-string {
        color: var(--cecil-hl-green);
      }
      .hljs-attr,
      .hljs-variable,
      .hljs-template-variable,
      .hljs-type,
      .hljs-selector-class,
      .hljs-selector-attr,
      .hljs-selector-pseudo,
      .hljs-number {
        color: var(--cecil-hl-orange);
      }
      .hljs-symbol,
      .hljs-bullet,
      .hljs-link,
      .hljs-meta,
      .hljs-selector-id,
      .hljs-title {
        color: var(--cecil-hl-blue);
      }
      .hljs-built_in,
      .hljs-title.class_,
      .hljs-class .hljs-title {
        color: var(--cecil-hl-yellow);
      }
      .hljs-emphasis {
        font-style: italic;
      }
      .hljs-strong {
        font-weight: bold;
      }
      .hljs-link {
        text-decoration: underline;
      }";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/highlight.css.twig";
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
        return array (  133 => 86,  83 => 39,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/highlight.css.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/highlight.css.twig");
    }
}
