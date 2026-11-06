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

/* home.html.twig */
class __TwigTemplate_2b667cf5c90a56cf612e8620dc6662d7 extends Template
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
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "language", [], "any", false, false, false, 2);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"";
        // line 6
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6);
        yield "\">
  <meta name=\"theme-color\" content=\"#050514\">
  <title>TrustCar Auto | ";
        // line 8
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8);
        yield "</title>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "language", [], "any", false, false, false, 12) == "fr")) ? ("../") : (""));
        yield "styles.css\">
</head>
<body>
  <header class=\"header\">
    <div class=\"container header-inner\">
      <a class=\"brand\" href=\"#top\" aria-label=\"";
        // line 17
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TrustCar Auto home");
        yield "\">
        <img src=\"";
        // line 18
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 18, $this->source); })()), "language", [], "any", false, false, false, 18) == "fr")) ? ("../") : (""));
        yield "images/TrustCarAutoLogo.png\" alt=\"\" width=\"500\" height=\"500\">
      </a>
      <nav class=\"navigation\" aria-label=\"";
        // line 20
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main navigation");
        yield "\">
        <a href=\"#about\">";
        // line 21
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("About us");
        yield "</a>
        <a href=\"#process\">";
        // line 22
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How it works");
        yield "</a>
        <a href=\"#deliveries\">";
        // line 23
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Our deliveries");
        yield "</a>
      </nav>
      <a class=\"language-switch\" href=\"";
        // line 25
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 25, $this->source); })()), "language", [], "any", false, false, false, 25) == "fr")) ? ("../") : ("fr/"));
        yield "\" lang=\"";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 25, $this->source); })()), "language", [], "any", false, false, false, 25) == "fr")) ? ("en") : ("fr"));
        yield "\" hreflang=\"";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 25, $this->source); })()), "language", [], "any", false, false, false, 25) == "fr")) ? ("en") : ("fr"));
        yield "\">";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 25, $this->source); })()), "language", [], "any", false, false, false, 25) == "fr")) ? ("English") : ("Français"));
        yield "</a>
      <a class=\"button button-dark header-cta\" href=\"#contact\">";
        // line 26
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get in touch");
        yield " <span aria-hidden=\"true\">↗</span></a>
      <details class=\"mobile-menu\">
        <summary>Menu <span aria-hidden=\"true\">☰</span></summary>
        <nav class=\"mobile-navigation\" aria-label=\"";
        // line 29
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mobile navigation");
        yield "\">
          <a href=\"#about\">";
        // line 30
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("About us");
        yield "</a>
          <a href=\"#process\">";
        // line 31
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How it works");
        yield "</a>
          <a href=\"#deliveries\">";
        // line 32
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Our deliveries");
        yield "</a>
          <a href=\"#contact\">";
        // line 33
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get in touch");
        yield "</a>
        </nav>
      </details>
    </div>
  </header>

  <main id=\"top\">
    <section class=\"hero\">
      <div class=\"hero-image\" role=\"img\" aria-label=\"";
        // line 41
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A car on an open road");
        yield "\"></div>
      <div class=\"hero-shade\"></div>
      <div class=\"container hero-content\">
        <div class=\"eyebrow hero-eyebrow\"><span class=\"eyebrow-line\"></span> ";
        // line 44
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("JAPAN TO DR CONGO");
        yield "</div>
        <h1>";
        // line 45
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A better journey");
        yield "<br>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("starts with");
        yield " <em>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trust.");
        yield "</em></h1>
        <p>";
        // line 46
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quality Japanese vehicles, thoughtfully sourced and safely delivered to your driveway.");
        yield "</p>
        <div class=\"hero-actions\">
          <a class=\"button button-light\" href=\"#process\">";
        // line 48
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discover how it works");
        yield " <span aria-hidden=\"true\">↗</span></a>
          <a class=\"hero-link\" href=\"#about\">";
        // line 49
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get to know us");
        yield " <span aria-hidden=\"true\">↓</span></a>
        </div>
      </div>
      <div class=\"container hero-bottom\">
        <span>";
        // line 53
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("YOUR JOURNEY, OUR COMMITMENT");
        yield "</span>
        <span>01 / 04</span>
      </div>
    </section>

    <div class=\"promise-strip\">
      <div class=\"container promise-inner\">
        <span><span class=\"promise-icon\">✳</span> ";
        // line 60
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carefully selected vehicles");
        yield "</span>
        <span><span class=\"promise-icon\">✳</span> ";
        // line 61
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A transparent process");
        yield "</span>
        <span><span class=\"promise-icon\">✳</span> ";
        // line 62
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivered with care");
        yield "</span>
      </div>
    </div>

    <section class=\"section about\" id=\"about\">
      <div class=\"container about-grid\">
        <div>
          <div class=\"eyebrow\"><span class=\"eyebrow-line\"></span> ";
        // line 69
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("THE TRUSTCAR DIFFERENCE");
        yield "</div>
          <h2>";
        // line 70
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More than a car.");
        yield "<br><em>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Peace of mind.");
        yield "</em></h2>
        </div>
        <div class=\"about-copy\">
          <p class=\"lead\">";
        // line 73
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finding the right car should feel exciting, not uncertain.");
        yield "</p>
          <p>";
        // line 74
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At TrustCar Auto, we connect you with high-quality Japanese vehicles and guide you through every step of the import journey. Based in Butembo and working online, we\x27re here to make the road from Japan to the Democratic Republic of the Congo a little simpler.");
        yield "</p>
          <a class=\"text-link\" href=\"#process\">";
        // line 75
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See how we work");
        yield " <span aria-hidden=\"true\">↗</span></a>
        </div>
      </div>
      <div class=\"container values\">
        <article><span class=\"value-number\">01</span><h3>";
        // line 79
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trust, first");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear communication and a process you can follow.");
        yield "</p></article>
        <article><span class=\"value-number\">02</span><h3>";
        // line 80
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quality matters");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carefully selected, inspected vehicles from Japan.");
        yield "</p></article>
        <article><span class=\"value-number\">03</span><h3>";
        // line 81
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here for you");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Professional support from selection to delivery.");
        yield "</p></article>
      </div>
    </section>

    <section class=\"section process\" id=\"process\">
      <div class=\"container\">
        <div class=\"section-heading\">
          <div><div class=\"eyebrow\"><span class=\"eyebrow-line\"></span> ";
        // line 88
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SIMPLE & TRANSPARENT");
        yield "</div><h2>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From Japan to");
        yield "<br><em>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("your driveway.");
        yield "</em></h2></div>
          <p>";
        // line 89
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your next vehicle is closer than you think. We keep you informed throughout the journey.");
        yield "</p>
        </div>
        <div class=\"steps\">
          <article class=\"step\"><span class=\"step-num\">01</span><div class=\"step-line\"></div><h3>";
        // line 92
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose your vehicle");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tell us what you\x27re looking for. We\x27ll help you find a quality Japanese vehicle that fits your needs.");
        yield "</p></article>
          <article class=\"step\"><span class=\"step-num\">02</span><div class=\"step-line\"></div><h3>";
        // line 93
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pay 70% upfront");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Once you\x27ve chosen your car, pay 70% of the required amount to begin the import process.");
        yield "</p></article>
          <article class=\"step\"><span class=\"step-num\">03</span><div class=\"step-line\"></div><h3>";
        // line 94
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow the journey");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay informed as your vehicle makes its way from Japan to the Democratic Republic of the Congo.");
        yield "</p></article>
          <article class=\"step\"><span class=\"step-num\">04</span><div class=\"step-line\"></div><h3>";
        // line 95
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Take delivery");
        yield "</h3><p>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pay the remaining balance once your vehicle reaches you. Then it\x27s time to enjoy the drive.");
        yield "</p></article>
        </div>
        <p class=\"process-note\">";
        // line 97
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment and delivery details are confirmed with you before purchase.");
        yield "</p>
      </div>
    </section>

    <section class=\"section deliveries\" id=\"deliveries\">
      <div class=\"container\">
        <div class=\"section-heading\">
          <div><div class=\"eyebrow\"><span class=\"eyebrow-line\"></span> ";
        // line 104
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("THE JOURNEY IN PICTURES");
        yield "</div><h2>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivered with care.");
        yield "<br><em>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Driven with confidence.");
        yield "</em></h2></div>
          <p>";
        // line 105
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Every delivery has a story. Explore the vehicles that have made the journey to their new owners.");
        yield "</p>
        </div>
        ";
        // line 107
        $context["gallery"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 107, $this->source); })()), "data", [], "any", false, false, false, 107), "vehicles", [], "any", false, false, false, 107);
        // line 108
        yield "        ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 108, $this->source); })()), "cloud_name", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 108, $this->source); })()), "vehicles", [], "any", false, false, false, 108)))) {
            // line 109
            yield "          <div class=\"gallery\">
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 110, $this->source); })()), "vehicles", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
                // line 111
                yield "              <article class=\"vehicle-card\">
                ";
                // line 112
                $context["vehicle_title"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 112, $this->source); })()), "language", [], "any", false, false, false, 112) == "fr")) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "title_fr", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "title_fr", [], "any", false, false, false, 112), CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "title", [], "any", false, false, false, 112))) : (CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "title", [], "any", false, false, false, 112)))) : (CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "title", [], "any", false, false, false, 112)));
                // line 113
                yield "                ";
                $context["vehicle_alt"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 113, $this->source); })()), "language", [], "any", false, false, false, 113) == "fr")) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "alt_fr", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "alt_fr", [], "any", false, false, false, 113), (isset($context["vehicle_title"]) || array_key_exists("vehicle_title", $context) ? $context["vehicle_title"] : (function () { throw new RuntimeError('Variable "vehicle_title" does not exist.', 113, $this->source); })()))) : ((isset($context["vehicle_title"]) || array_key_exists("vehicle_title", $context) ? $context["vehicle_title"] : (function () { throw new RuntimeError('Variable "vehicle_title" does not exist.', 113, $this->source); })())))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "alt", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "alt", [], "any", false, false, false, 113), (isset($context["vehicle_title"]) || array_key_exists("vehicle_title", $context) ? $context["vehicle_title"] : (function () { throw new RuntimeError('Variable "vehicle_title" does not exist.', 113, $this->source); })()))) : ((isset($context["vehicle_title"]) || array_key_exists("vehicle_title", $context) ? $context["vehicle_title"] : (function () { throw new RuntimeError('Variable "vehicle_title" does not exist.', 113, $this->source); })())))));
                // line 114
                yield "                ";
                $context["vehicle_description"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 114, $this->source); })()), "language", [], "any", false, false, false, 114) == "fr")) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "description_fr", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "description_fr", [], "any", false, false, false, 114), "")) : (""))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "description", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "description", [], "any", false, false, false, 114), "")) : (""))));
                // line 115
                yield "                <a class=\"vehicle-image-link\" href=\"https://res.cloudinary.com/";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 115, $this->source); })()), "cloud_name", [], "any", false, false, false, 115), "html_attr");
                yield "/image/upload/";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "public_id", [], "any", false, false, false, 115), "html_attr");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\" aria-label=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View full image of %vehicle% (opens in a new tab)", ["%vehicle%" => (isset($context["vehicle_alt"]) || array_key_exists("vehicle_alt", $context) ? $context["vehicle_alt"] : (function () { throw new RuntimeError('Variable "vehicle_alt" does not exist.', 115, $this->source); })())]), "html_attr");
                yield "\">
                  <img src=\"https://res.cloudinary.com/";
                // line 116
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 116, $this->source); })()), "cloud_name", [], "any", false, false, false, 116), "html_attr");
                yield "/image/upload/f_auto,q_auto,c_fill,w_1000,h_700/";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "public_id", [], "any", false, false, false, 116), "html_attr");
                yield "\" alt=\"";
                yield (string) $this->escaper->escape((isset($context["vehicle_alt"]) || array_key_exists("vehicle_alt", $context) ? $context["vehicle_alt"] : (function () { throw new RuntimeError('Variable "vehicle_alt" does not exist.', 116, $this->source); })()), "html_attr");
                yield "\" loading=\"lazy\" width=\"1000\" height=\"700\">
                </a>
                <div class=\"vehicle-details\"><div><span class=\"card-label\">";
                // line 118
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("DELIVERED VEHICLE");
                yield "</span><h3>";
                yield (string) (isset($context["vehicle_title"]) || array_key_exists("vehicle_title", $context) ? $context["vehicle_title"] : (function () { throw new RuntimeError('Variable "vehicle_title" does not exist.', 118, $this->source); })());
                yield "</h3>";
                if ((($tmp = (isset($context["vehicle_description"]) || array_key_exists("vehicle_description", $context) ? $context["vehicle_description"] : (function () { throw new RuntimeError('Variable "vehicle_description" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p>";
                    yield (string) (isset($context["vehicle_description"]) || array_key_exists("vehicle_description", $context) ? $context["vehicle_description"] : (function () { throw new RuntimeError('Variable "vehicle_description" does not exist.', 118, $this->source); })());
                    yield "</p>";
                }
                yield "</div><span class=\"card-arrow\" aria-hidden=\"true\">↗</span></div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vehicle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 121
            yield "          </div>
        ";
        } else {
            // line 123
            yield "          <div class=\"gallery-empty\"><span class=\"empty-icon\" aria-hidden=\"true\">✳</span><div><h3>";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good journeys are worth sharing.");
            yield "</h3><p>";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Our delivery gallery is coming soon. Check back for vehicles delivered by TrustCar Auto.");
            yield "</p></div></div>
        ";
        }
        // line 125
        yield "      </div>
    </section>

    <section class=\"contact\" id=\"contact\">
      <div class=\"container contact-inner\">
        <div>
          <div class=\"eyebrow light-eyebrow\"><span class=\"eyebrow-line\"></span> ";
        // line 131
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LET\x27S GET YOU MOVING");
        yield "</div>
          <h2>";
        // line 132
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your next chapter");
        yield "<br>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("starts");
        yield " <em>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("here.");
        yield "</em></h2>
          <p>";
        // line 133
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Have a vehicle in mind? Let\x27s make the journey together.");
        yield "</p>
          <div class=\"contact-actions\">
            ";
        // line 135
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 135, $this->source); })()), "data", [], "any", false, false, false, 135), "business", [], "any", false, false, false, 135), "whatsapp", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "              <a class=\"button button-whatsapp\" href=\"https://wa.me/";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 136, $this->source); })()), "data", [], "any", false, false, false, 136), "business", [], "any", false, false, false, 136), "whatsapp", [], "any", false, false, false, 136), ["+" => "", " " => "", "-" => "", "(" => "", ")" => ""]), "html_attr");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chat on WhatsApp");
            yield " <span aria-hidden=\"true\">↗</span></a>
            ";
        }
        // line 138
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 138, $this->source); })()), "data", [], "any", false, false, false, 138), "business", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "              <a class=\"button button-outline\" href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 139, $this->source); })()), "data", [], "any", false, false, false, 139), "business", [], "any", false, false, false, 139), "email", [], "any", false, false, false, 139), "html_attr");
            yield "\">";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email us");
            yield " <span aria-hidden=\"true\">↗</span></a>
            ";
        }
        // line 141
        yield "          </div>
        </div>
        <div class=\"contact-location\"><span class=\"location-icon\" aria-hidden=\"true\">⌁</span><span>";
        // line 143
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BASED IN");
        yield "<br><strong>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Butembo, DR Congo");
        yield "</strong><br>";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available online");
        yield "</span></div>
      </div>
    </section>
  </main>
  <footer>
    <div class=\"container footer-inner\">
      <a class=\"brand footer-brand\" href=\"#top\" aria-label=\"";
        // line 149
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TrustCar Auto home");
        yield "\"><img src=\"";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 149, $this->source); })()), "language", [], "any", false, false, false, 149) == "fr")) ? ("../") : (""));
        yield "images/TrustCarAutoLogo.png\" alt=\"\" width=\"500\" height=\"500\"></a>
      <p>";
        // line 150
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From Japan to Your Driveway.");
        yield "</p>
      <span>© ";
        // line 151
        yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        yield " TrustCar Auto</span>
    </div>
  </footer>
  <script>
    const mobileMenu = document.querySelector(\x27.mobile-menu\x27);
    mobileMenu.addEventListener(\x27click\x27, (event) => {
      if (event.target.closest(\x27.mobile-navigation a\x27)) mobileMenu.open = false;
    });
    mobileMenu.addEventListener(\x27keydown\x27, (event) => {
      if (event.key === \x27Escape\x27 && mobileMenu.open) {
        mobileMenu.open = false;
        mobileMenu.querySelector(\x27summary\x27).focus();
      }
    });
  </script>
</body>
</html>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
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
        return array (  465 => 151,  461 => 150,  455 => 149,  442 => 143,  438 => 141,  430 => 139,  427 => 138,  419 => 136,  417 => 135,  412 => 133,  404 => 132,  400 => 131,  392 => 125,  384 => 123,  380 => 121,  362 => 118,  353 => 116,  344 => 115,  341 => 114,  338 => 113,  336 => 112,  333 => 111,  329 => 110,  326 => 109,  323 => 108,  321 => 107,  316 => 105,  308 => 104,  298 => 97,  291 => 95,  285 => 94,  279 => 93,  273 => 92,  267 => 89,  259 => 88,  247 => 81,  241 => 80,  235 => 79,  228 => 75,  224 => 74,  220 => 73,  212 => 70,  208 => 69,  198 => 62,  194 => 61,  190 => 60,  180 => 53,  173 => 49,  169 => 48,  164 => 46,  156 => 45,  152 => 44,  146 => 41,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  113 => 26,  103 => 25,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  81 => 18,  77 => 17,  69 => 12,  62 => 8,  57 => 6,  50 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home.html.twig", "C:\\Users\\Baraka24\\Desktop\\TrustCar\\layouts\\home.html.twig");
    }
}
