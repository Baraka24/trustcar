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

/* partials/theme-selector.html.twig */
class __TwigTemplate_fb841e22a629f9a916d46295a94f9635 extends Template
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
        yield "
<button id=\"theme-toggle\" type=\"button\" style=\"cursor: pointer;\" title=\"";
        // line 2
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change theme color", [], "messages");
        yield "\" aria-label=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change theme color", [], "messages");
        yield "\">
  <svg id=\"theme-toggle-dark-icon\" style=\"width: auto; height: 1.4rem;\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z\"></path></svg>
  <svg id=\"theme-toggle-light-icon\" style=\"width: auto; height: 1.5rem; display: none;\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"></path></svg>
</button>
<script>";
        // line 6
        $_v0 = new Markup("
  var themeToggleDarkIcon = document.getElementById(\x27theme-toggle-dark-icon\x27);
  var themeToggleLightIcon = document.getElementById(\x27theme-toggle-light-icon\x27);
  var themeToggleBtn = document.getElementById(\x27theme-toggle\x27);
  function getSystemTheme() {
    return window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches ? \x27dark\x27 : \x27light\x27;
  }
  function saveThemePreference(theme) {
    if (theme === getSystemTheme()) {
      localStorage.removeItem(\x27theme\x27);
    } else {
      localStorage.setItem(\x27theme\x27, theme);
    }
  }
  function updateTheme() {
    if (localStorage.getItem(\x27theme\x27) === \x27dark\x27 || (!(\x27theme\x27 in localStorage) && window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches)) {
      document.documentElement.dataset.theme = \x27dark\x27;
      themeToggleDarkIcon.style.display = \x27none\x27;
      themeToggleLightIcon.style.display = \x27\x27;
    } else {
      document.documentElement.dataset.theme = \x27light\x27;
      themeToggleLightIcon.style.display = \x27none\x27;
      themeToggleDarkIcon.style.display = \x27\x27;
    }
  }
  updateTheme();
  window
    .matchMedia(\x27(prefers-color-scheme: dark)\x27)
    .addEventListener(\x27change\x27, ({matches:isDark}) => {
      var storedTheme = localStorage.getItem(\x27theme\x27);
      if (storedTheme === (isDark ? \x27dark\x27 : \x27light\x27)) {
        localStorage.removeItem(\x27theme\x27);
      }
      updateTheme();
    })
  themeToggleBtn.addEventListener(\x27click\x27, function() {
    themeToggleDarkIcon.style.display = themeToggleDarkIcon.style.display === \x27none\x27 ? \x27\x27 : \x27none\x27;
    themeToggleLightIcon.style.display = themeToggleLightIcon.style.display === \x27none\x27 ? \x27\x27 : \x27none\x27;
    if (localStorage.getItem(\x27theme\x27)) {
      if (localStorage.getItem(\x27theme\x27) === \x27light\x27) {
        saveThemePreference(\x27dark\x27);
        updateTheme();
      } else {
        saveThemePreference(\x27light\x27);
        updateTheme();
      }
    } else {
      if (document.documentElement.dataset.theme === \x27dark\x27) {
        saveThemePreference(\x27light\x27);
        updateTheme();
      } else {
        saveThemePreference(\x27dark\x27);
        updateTheme();
      }
    }
  });
", $this->env->getCharset());
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($_v0);
        // line 62
        yield "</script>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/theme-selector.html.twig";
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
        return array (  115 => 62,  56 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/theme-selector.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/theme-selector.html.twig");
    }
}
