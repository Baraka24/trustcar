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

/* _default/page.html.twig */
class __TwigTemplate_d2de837f70f95ec3096c55b97c0956db extends Template
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
            'head' => [$this, 'block_head'],
            'head_metatags' => [$this, 'block_head_metatags'],
            'head_css' => [$this, 'block_head_css'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "language", [], "any", false, false, false, 2);
        yield "\">
  <head>";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 12
        yield from $this->unwrap()->yieldBlock('head_css', $context, $blocks);
        // line 462
        yield "
  </head>
  <body>
    <a class=\"skip-link\" href=\"#main\">";
        // line 465
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skip to content", [], "messages");
        yield "</a>
    <header>";
        // line 467
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 485
        yield "
    </header>
    <main id=\"main\">";
        // line 488
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/breadcrumb.html.twig");
        // line 489
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 492
        if ((($tmp = $this->extensions['Cecil\Renderer\Extension\Core']->getEnv("CECIL_DEBUG")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->varDump($this->env, $context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 492, $this->source); })()));
        }
        yield "
    </main>
    <footer>";
        // line 495
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 500
        yield "
    </footer>
  </body>
</html>";
        return; yield;
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metatags', $context, $blocks);
        // line 9
        yield "
    <meta name=\"color-scheme\" content=\"light dark\">";
        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metatags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/metatags.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })())], false);
        return; yield;
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <style>";
        // line 13
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/pico.css.twig");
            yield "
      /* Pico CSS overrides */
      :root {
        --cecil-note-info: #0172ad;
        --cecil-note-tip: #398712;
        --cecil-note-important: #8352c5;
        --cecil-note-warning: #b45309;
        --cecil-note-caution: #d93526;
      }
      @media only screen and (prefers-color-scheme: dark) {
        :root:not([data-theme=light]) {
          --cecil-note-info: #4cb2e8;
          --cecil-note-tip: #6cc24a;
          --cecil-note-important: #b38ae8;
          --cecil-note-warning: #f0a43a;
          --cecil-note-caution: #f06048;
        }
      }
      [data-theme=dark] {
        --cecil-note-info: #4cb2e8;
        --cecil-note-tip: #6cc24a;
        --cecil-note-important: #b38ae8;
        --cecil-note-warning: #f0a43a;
        --cecil-note-caution: #f06048;
      }
      @media (min-width: 1024px) {
        body > header,
        body > main,
        body > footer {
          max-width: 768px;
        }
      }
      nav, nav ul {
        display: flex;
        flex-wrap: wrap;
      }
      img {
        margin-bottom: calc(var(--pico-spacing) / 2);
      }
      /* Skip link */
      .skip-link {
        position: absolute;
        top: -100px;
        left: 1rem;
        z-index: 10;
        padding: .5rem 1rem;
        border-radius: var(--pico-border-radius);
        background: var(--pico-primary-background);
        color: var(--pico-primary-inverse);
      }
      .skip-link:focus {
        top: 1rem;
      }
      /* Header */
      body > header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        column-gap: var(--pico-spacing);
        padding-bottom: var(--pico-spacing);
        border-bottom: 1px solid var(--pico-muted-border-color);
      }
      body > header > hgroup {
        flex-basis: 100%;
        margin-bottom: 0;
        text-align: center;
      }
      body > header > hgroup > p:empty {
        display: none;
      }
      .site-title {
        --pico-font-weight: 700;
        --pico-font-size: 2rem;
        --pico-line-height: 1.125;
        --pico-color: var(--pico-h1-color);
        margin-top: 0;
        margin-bottom: 0;
        color: var(--pico-color);
        font-weight: var(--pico-font-weight);
        font-size: var(--pico-font-size);
        line-height: var(--pico-line-height);
        font-family: var(--pico-font-family);
      }
      .site-title a {
        --pico-color: inherit;
        color: inherit;
        text-decoration: none;
      }
      body > header nav {
        justify-content: center;
      }
      body > header nav a[aria-current] {
        color: var(--pico-primary-hover);
        font-weight: 600;
        text-decoration: underline;
        text-underline-offset: .4em;
      }
      .site-tools {
        display: flex;
        align-items: center;
        gap: var(--pico-spacing);
      }
      .site-tools nav a {
        margin: 0;
        padding: 0;
      }
      .languages a {
        font-size: .875em;
        text-decoration: none;
      }
      @media (width >= 48rem) {
        body > header {
          justify-content: space-between;
        }
        body > header > hgroup {
          flex-basis: auto;
          text-align: left;
        }
        body > header nav {
          margin-left: auto;
        }
      }
      body > main {
        padding-top: calc(var(--pico-block-spacing-vertical) * .75);
      }
      /* Breadcrumb */
      nav[aria-label=breadcrumb] {
        --pico-nav-breadcrumb-divider: \"\\0203A\";
        --pico-nav-link-spacing-horizontal: .5rem;
        margin-bottom: calc(var(--pico-spacing) / 2);
        font-size: .875em;
      }
      nav[aria-label=breadcrumb] ul li:not(:last-child)::after {
        font-weight: 300;
        opacity: .7;
      }
      nav[aria-label=breadcrumb] a {
        text-decoration: none;
      }
      nav[aria-label=breadcrumb] a:hover {
        text-decoration: underline;
      }
      nav[aria-label=breadcrumb] a[aria-current]:not([aria-current=false]) {
        color: var(--pico-muted-color);
      }
      /* Footer */
      body > footer {
        border-top: 1px solid var(--pico-muted-border-color);
        color: var(--pico-muted-color);
      }
      /* Headings anchors */
      main :is(h2, h3, h4, h5, h6)[id] {
        scroll-margin-top: var(--pico-spacing);
      }
      .heading-anchor {
        margin-left: .4em;
        color: var(--pico-muted-color);
        text-decoration: none;
        opacity: 0;
        transition: opacity .2s;
      }
      .heading-anchor::before {
        content: \"#\";
      }
      :is(h2, h3, h4, h5, h6):hover .heading-anchor,
      .heading-anchor:focus {
        opacity: 1;
      }
      /* Code */
      pre[data-lang] {
        position: relative;
      }
      pre[data-lang]::before {
        content: attr(data-lang);
        position: absolute;
        top: .25rem;
        right: .5rem;
        color: var(--pico-muted-color);
        font-size: .7rem;
        text-transform: uppercase;
        letter-spacing: .05em;
      }
      /* Lists of pages */
      main article.list-item {
        margin: 0;
        padding: var(--pico-spacing) 0;
        border-bottom: 1px solid var(--pico-muted-border-color);
        border-radius: 0;
        background: none;
        box-shadow: none;
      }
      main article.list-item:last-of-type {
        border-bottom: none;
      }
      main article.list-item h2 {
        margin-bottom: .25rem;
        font-size: 1.375rem;
      }
      main article.list-item h2 a {
        text-decoration: none;
      }
      main article.list-item p {
        margin: .25rem 0 0;
      }
      main time {
        color: var(--pico-muted-color);
        font-size: .875em;
      }
      /* Cecil features */
      .page-nav {
        display: flex;
      }
      .page-nav a {
        text-decoration: none;
      }
      .page-nav .prev:before {
        content: \"\\002039\";
        margin-right: .5rem;
      }
      .page-nav .next {
        margin-left: auto;
      }
      .page-nav .next:after {
        content: \"\\00203A\";
        margin-left: .5rem;
      }
      .paginator {
        justify-content: center;
        margin-top: var(--pico-spacing);
      }
      .paginator ul {
        gap: .25rem;
        margin: 0;
        padding: 0;
      }
      .paginator li {
        padding: 0;
        list-style: none;
      }
      .paginator a,
      .paginator span {
        display: inline-block;
        margin: 0;
        min-width: 2.25rem;
        padding: .25rem .6rem;
        border-radius: var(--pico-border-radius);
        text-align: center;
        text-decoration: none;
      }
      .paginator a[aria-current] {
        background: var(--pico-primary-background);
        color: var(--pico-primary-inverse);
      }
      .paginator span {
        color: var(--pico-muted-color);
        opacity: .6;
      }
      /* Terms */
      nav.terms ul {
        flex-wrap: wrap;
        gap: .5rem;
        margin: 0 0 var(--pico-spacing);
        padding: 0;
      }
      .terms li {
        margin: 0;
        padding: 0;
        list-style: none;
      }
      .terms .term {
        margin: 0;
      }
      .term {
        display: inline-block;
        padding: .1rem .65rem;
        border: 1px solid var(--pico-muted-border-color);
        border-radius: 1rem;
        font-size: .875rem;
        text-decoration: none;
      }
      .term:before {
        content: \"#\";
        color: var(--pico-muted-color);
      }
      .term small {
        margin-left: .35rem;
        color: var(--pico-muted-color);
      }
      /* Notes */
      main aside.note {
        --cecil-note-color: var(--pico-muted-color);
        position: relative;
        margin-bottom: var(--pico-spacing);
        padding: .75rem 1rem;
        border-left: 4px solid var(--cecil-note-color);
        border-radius: var(--pico-border-radius);
        background: color-mix(in srgb, var(--cecil-note-color) 8%, transparent);
      }
      main aside.note > :last-child {
        margin-bottom: 0;
      }
      main aside.note:is(.note-info, .note-tip, .note-important, .note-warning, .note-caution) {
        padding-left: 2.75rem;
      }
      main aside.note:is(.note-info, .note-tip, .note-important, .note-warning, .note-caution)::before {
        content: \"\";
        position: absolute;
        top: .85rem;
        left: .9rem;
        width: 1.2rem;
        height: 1.2rem;
        background-color: var(--cecil-note-color);
        -webkit-mask: var(--cecil-note-icon) no-repeat center / contain;
        mask: var(--cecil-note-icon) no-repeat center / contain;
      }
      main aside.note-info {
        --cecil-note-color: var(--cecil-note-info);
        --cecil-note-icon: url(\"data:image/svg+xml,%3Csvg xmlns=\x27http://www.w3.org/2000/svg\x27 viewBox=\x270 0 24 24\x27 fill=\x27none\x27 stroke=\x27black\x27 stroke-width=\x272\x27 stroke-linecap=\x27round\x27 stroke-linejoin=\x27round\x27%3E%3Ccircle cx=\x2712\x27 cy=\x2712\x27 r=\x2710\x27/%3E%3Cpath d=\x27M12 16v-4M12 8h.01\x27/%3E%3C/svg%3E\");
      }
      main aside.note-tip {
        --cecil-note-color: var(--cecil-note-tip);
        --cecil-note-icon: url(\"data:image/svg+xml,%3Csvg xmlns=\x27http://www.w3.org/2000/svg\x27 viewBox=\x270 0 24 24\x27 fill=\x27none\x27 stroke=\x27black\x27 stroke-width=\x272\x27 stroke-linecap=\x27round\x27 stroke-linejoin=\x27round\x27%3E%3Cpath d=\x27M9 18h6M10 22h4M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z\x27/%3E%3C/svg%3E\");
      }
      main aside.note-important {
        --cecil-note-color: var(--cecil-note-important);
        --cecil-note-icon: url(\"data:image/svg+xml,%3Csvg xmlns=\x27http://www.w3.org/2000/svg\x27 viewBox=\x270 0 24 24\x27 fill=\x27none\x27 stroke=\x27black\x27 stroke-width=\x272\x27 stroke-linecap=\x27round\x27 stroke-linejoin=\x27round\x27%3E%3Cpath d=\x27M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\x27/%3E%3Cpath d=\x27M12 7v4M12 14h.01\x27/%3E%3C/svg%3E\");
      }
      main aside.note-warning {
        --cecil-note-color: var(--cecil-note-warning);
        --cecil-note-icon: url(\"data:image/svg+xml,%3Csvg xmlns=\x27http://www.w3.org/2000/svg\x27 viewBox=\x270 0 24 24\x27 fill=\x27none\x27 stroke=\x27black\x27 stroke-width=\x272\x27 stroke-linecap=\x27round\x27 stroke-linejoin=\x27round\x27%3E%3Cpath d=\x27M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z\x27/%3E%3Cpath d=\x27M12 9v4M12 17h.01\x27/%3E%3C/svg%3E\");
      }
      main aside.note-caution {
        --cecil-note-color: var(--cecil-note-caution);
        --cecil-note-icon: url(\"data:image/svg+xml,%3Csvg xmlns=\x27http://www.w3.org/2000/svg\x27 viewBox=\x270 0 24 24\x27 fill=\x27none\x27 stroke=\x27black\x27 stroke-width=\x272\x27 stroke-linecap=\x27round\x27 stroke-linejoin=\x27round\x27%3E%3Cpath d=\x27M7.9 2h8.2L22 7.9v8.2L16.1 22H7.9L2 16.1V7.9z\x27/%3E%3Cpath d=\x27M12 8v4M12 16h.01\x27/%3E%3C/svg%3E\");
      }
      /* Notes templates (tabs, code group, steps, accordion and cards) */
      main div.note {
        margin-bottom: var(--pico-spacing);
      }
      .note-tab {
        margin-bottom: var(--pico-spacing);
        padding: var(--pico-spacing);
        border: 1px solid var(--pico-muted-border-color);
        border-radius: var(--pico-border-radius);
      }
      .note-tab > :last-child {
        margin-bottom: 0;
      }
      .note-tab > h4:first-child,
      .note-tab-title {
        margin-bottom: .5rem;
        color: var(--pico-muted-color);
        font-size: .8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .05em;
      }
      .note-steps-list {
        margin: 0;
        padding: 0;
        counter-reset: step;
      }
      .note-steps-list > .note-step {
        position: relative;
        padding: 0 0 var(--pico-spacing) 2.75rem;
        list-style: none;
        counter-increment: step;
      }
      .note-steps-list > .note-step::before {
        content: counter(step);
        position: absolute;
        top: 0;
        left: 0;
        display: grid;
        place-items: center;
        width: 1.9rem;
        height: 1.9rem;
        border-radius: 50%;
        background: var(--pico-primary-background);
        color: var(--pico-primary-inverse);
        font-size: .9rem;
        font-weight: 600;
      }
      .note-steps-list > .note-step:not(:last-child)::after {
        content: \"\";
        position: absolute;
        top: 2.3rem;
        bottom: .4rem;
        left: calc(.95rem - 1px);
        width: 2px;
        background: var(--pico-muted-border-color);
      }
      .note-step > h4:first-child {
        margin-bottom: .5rem;
        line-height: 1.9rem;
      }
      .note-accordion-item {
        margin: 0;
        padding: .5rem 0;
        border-bottom: 1px solid var(--pico-muted-border-color);
      }
      .note-accordion-item > summary {
        font-weight: 600;
      }
      .note-accordion-content {
        padding-top: .5rem;
      }
      .note-cards-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(14rem, 1fr));
        gap: var(--pico-spacing);
        margin: 0;
        padding: 0;
      }
      .note-card {
        margin: 0;
        padding: var(--pico-spacing);
        border: 1px solid var(--pico-muted-border-color);
        border-radius: var(--pico-border-radius);
        list-style: none;
      }
      .note-card-title {
        margin-bottom: .25rem;
        font-weight: 600;
      }
      .note-card-content > :last-child {
        margin-bottom: 0;
      }
      /* Theme selector */
      #theme-toggle {
        --pico-background-color: transparent;
        --pico-border-color: transparent;
        --pico-color: var(--pico-muted-color);
        margin: 0;
        padding: .25rem;
        border: none;
        outline: none;
      }
      #theme-toggle:focus-visible {
        outline: 2px solid var(--pico-primary-focus);
        box-shadow: none;
      }";
            // line 457
            $context["highlight_config"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "pages", [], "any", false, true, false, 457), "body", [], "any", false, true, false, 457), "highlight", [], "any", true, true, false, 457) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 457, $this->source); })()), "pages", [], "any", false, false, false, 457), "body", [], "any", false, false, false, 457), "highlight", [], "any", false, false, false, 457)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 457, $this->source); })()), "pages", [], "any", false, false, false, 457), "body", [], "any", false, false, false, 457), "highlight", [], "any", false, false, false, 457)) : (true));
            // line 458
            if ((($tmp = ((is_iterable((isset($context["highlight_config"]) || array_key_exists("highlight_config", $context) ? $context["highlight_config"] : (function () { throw new RuntimeError('Variable "highlight_config" does not exist.', 458, $this->source); })()))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["highlight_config"] ?? null), "enabled", [], "any", true, true, false, 458) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["highlight_config"]) || array_key_exists("highlight_config", $context) ? $context["highlight_config"] : (function () { throw new RuntimeError('Variable "highlight_config" does not exist.', 458, $this->source); })()), "enabled", [], "any", false, false, false, 458)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["highlight_config"]) || array_key_exists("highlight_config", $context) ? $context["highlight_config"] : (function () { throw new RuntimeError('Variable "highlight_config" does not exist.', 458, $this->source); })()), "enabled", [], "any", false, false, false, 458)) : (true))) : ((isset($context["highlight_config"]) || array_key_exists("highlight_config", $context) ? $context["highlight_config"] : (function () { throw new RuntimeError('Variable "highlight_config" does not exist.', 458, $this->source); })())))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 459
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/highlight.css.twig");
            }
            // line 460
            yield "
    ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->minifyCss($_v0);
        // line 461
        yield "</style>";
        return; yield;
    }

    // line 467
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
      <hgroup>";
        // line 469
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 469, $this->source); })()), "type", [], "any", false, false, false, 469) == "homepage")) {
            yield "
        <h1>";
            // line 470
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 470, $this->source); })()), "title", [], "any", false, false, false, 470);
            yield "</h1>";
        } else {
            // line 471
            yield "
        <div class=\"site-title\"><a href=\"";
            // line 472
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 472, $this->source); })()), "home", [], "any", false, false, false, 472));
            yield "\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 472, $this->source); })()), "title", [], "any", false, false, false, 472);
            yield "</a></div>";
        }
        // line 473
        yield "
        <p>";
        // line 474
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 474, $this->source); })()), "baseline", [], "any", false, false, false, 474);
        yield "</p>
      </hgroup>";
        // line 476
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/navigation.html.twig", ["menu" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 476, $this->source); })()), "menus", [], "any", false, false, false, 476), "main", [], "any", false, false, false, 476), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 476, $this->source); })())], false);
        yield "
      <div class=\"site-tools\">";
        // line 478
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "translations", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 478, $this->source); })()), "translations", [], "any", false, false, false, 478), [])) : ([]))) >= 1)) {
            yield "
        <nav class=\"languages\" aria-label=\"";
            // line 479
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Languages", [], "messages");
            yield "\">";
            // line 480
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/languages.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 480, $this->source); })()), "label" => "code"], false);
            yield "
        </nav>";
        }
        // line 483
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/theme-selector.html.twig", [], false);
        yield "
      </div>";
        return; yield;
    }

    // line 489
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 490
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 490, $this->source); })()), "content", [], "any", false, false, false, 490);
        return; yield;
    }

    // line 495
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 496
        $context["powered_by"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 497
            yield "<a href=\"";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 497, $this->source); })()), "url", [], "any", false, false, false, 497);
            yield "\">Cecil</a> &amp; <a href=\"https://picocss.com\">Pico CSS</a>";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 498
        yield "
      <small>";
        // line 499
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (isset($context["powered_by"]) || array_key_exists("powered_by", $context) ? $context["powered_by"] : (function () { throw new RuntimeError('Variable "powered_by" does not exist.', 499, $this->source); })())], "messages");
        yield "</small>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default/page.html.twig";
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
        return array (  688 => 499,  685 => 498,  679 => 497,  677 => 496,  670 => 495,  665 => 490,  658 => 489,  651 => 483,  646 => 480,  643 => 479,  639 => 478,  635 => 476,  631 => 474,  628 => 473,  622 => 472,  619 => 471,  615 => 470,  611 => 469,  602 => 467,  597 => 461,  595 => 13,  590 => 460,  587 => 459,  585 => 458,  583 => 457,  138 => 14,  136 => 13,  127 => 12,  122 => 8,  115 => 7,  109 => 9,  107 => 7,  97 => 4,  89 => 500,  87 => 495,  80 => 492,  78 => 489,  76 => 488,  72 => 485,  70 => 467,  66 => 465,  61 => 462,  59 => 12,  57 => 4,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default/page.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/_default/page.html.twig");
    }
}
