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

/* partials/metatags.html.twig */
class __TwigTemplate_513784102b3f9ba0604c06f0d6ff52e6 extends Template
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
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'metatags_favicon' => [$this, 'block_metatags_favicon'],
            'metatags_alternates' => [$this, 'block_metatags_alternates'],
            'metatags_og' => [$this, 'block_metatags_og'],
            'metatags_twitter' => [$this, 'block_metatags_twitter'],
            'metatags_dc' => [$this, 'block_metatags_dc'],
            'metatags_structured_data' => [$this, 'block_metatags_structured_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        [$context["title"], $context["author"], $context["image"], $context["video"], $context["audio"]] =         [((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("author", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("image", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("video", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("audio", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 2, $this->source); })()))) : (""))];
        // line 3
        $context["title_html"] = ((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()))) : (""));
        // line 5
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()))) {
            // line 6
            $context["title_divider"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), " &middot; ")) : (" &middot; ")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), " &middot; ")) : (" &middot; "))));
            // line 7
            $context["title_only"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), false)) : (false)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), false)) : (false))));
            // line 8
            $context["title_pagination_shownumber"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)) : (true)))) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)) : (true))));
            // line 9
            $context["title_pagination_label"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "Page %s")) : ("Page %s")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "Page %s")) : ("Page %s"))));
            // line 10
            $context["title"] = $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10)));
            // line 11
            $context["title_raw"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11));
            // line 12
            $context["title_html"] = (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 12, $this->source); })())) . $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)));
            // line 13
            if ((($tmp = (isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                $context["title_html"] = (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 14, $this->source); })());
            }
            // line 17
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17) == "homepage")) {
                // line 18
                $context["title"] = $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18));
                // line 19
                $context["title_raw"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19);
                // line 20
                $context["title_html"] = (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })()) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 20, $this->source); })())) . $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 20, $this->source); })()), "baseline", [], "any", false, false, false, 20))) : (""))));
                // line 21
                if (((($tmp = (isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 21, $this->source); })()), "baseline", [], "any", false, false, false, 21))) : (""))))) {
                    // line 22
                    $context["title_html"] = (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })());
                }
            }
            // line 26
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 26), "current", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "paginator", [], "any", false, false, false, 26), "current", [], "any", false, false, false, 26), 0)) : (0)) > 1)) {
                // line 27
                if ((($tmp = (isset($context["title_pagination_shownumber"]) || array_key_exists("title_pagination_shownumber", $context) ? $context["title_pagination_shownumber"] : (function () { throw new RuntimeError('Variable "title_pagination_shownumber" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 28
                    $context["title"] = ((($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28)) . " (") . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()), "paginator", [], "any", false, false, false, 28), "current", [], "any", false, false, false, 28))) . ")");
                    // line 29
                    $context["title_raw"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29) . " (") . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 29, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "paginator", [], "any", false, false, false, 29), "current", [], "any", false, false, false, 29))) . ")");
                    // line 30
                    $context["title_html"] = (((($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 30, $this->source); })())) . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 30, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()), "paginator", [], "any", false, false, false, 30), "current", [], "any", false, false, false, 30))) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 30, $this->source); })())) . $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30)));
                    // line 31
                    if ((($tmp = (isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 32
                        $context["title_html"] = (($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 32, $this->source); })())) . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()), "paginator", [], "any", false, false, false, 32), "current", [], "any", false, false, false, 32)));
                    }
                }
            }
        }
        // line 38
        $context["title_raw"] = ((array_key_exists("title_raw", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title_raw"]) || array_key_exists("title_raw", $context) ? $context["title_raw"] : (function () { throw new RuntimeError('Variable "title_raw" does not exist.', 38, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })()))) : ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })())));
        // line 40
        $context["description"] = $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40))));
        // line 42
        $context["keywords"] = $this->extensions['Cecil\Renderer\Extension\Content']->unique(Twig\Extension\CoreExtension::merge($this->extensions['Cecil\Renderer\Extension\Content']->iterable(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()), "tags", [], "any", false, false, false, 42), [])) : ([]))), $this->extensions['Cecil\Renderer\Extension\Content']->iterable(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 42, $this->source); })()), "keywords", [], "any", false, false, false, 42), [])) : ([])))));
        // line 44
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 44, $this->source); })()))) {
            // line 46
            $context["author"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 46, $this->source); })()), "author", [], "any", false, false, false, 46), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 46, $this->source); })()), "author", [], "any", false, false, false, 46))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 46, $this->source); })()), "author", [], "any", false, false, false, 46))) : (""))));
        }
        // line 48
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 48, $this->source); })()))) {
            // line 49
            if ( !is_iterable((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 49, $this->source); })()))) {
                // line 50
                $context["author"] = ["name" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 50, $this->source); })())];
            }
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", true, true, false, 52) && CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", true, true, false, 52))) {
                // line 53
                $context["author"] = Twig\Extension\CoreExtension::merge((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), ["name" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "firstname", [], "any", false, false, false, 53) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "lastname", [], "any", false, false, false, 53))]);
            }
        }
        // line 57
        $context["robots"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 57), "robots", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()), "metatags", [], "any", false, false, false, 57), "robots", [], "any", false, false, false, 57), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 57), "robots", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 57, $this->source); })()), "metatags", [], "any", false, false, false, 57), "robots", [], "any", false, false, false, 57), "index,follow")) : ("index,follow")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 57), "robots", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 57, $this->source); })()), "metatags", [], "any", false, false, false, 57), "robots", [], "any", false, false, false, 57), "index,follow")) : ("index,follow"))));
        // line 58
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 58), "current", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()), "paginator", [], "any", false, false, false, 58), "current", [], "any", false, false, false, 58), 0)) : (0)) > 1)) {
            // line 59
            $context["robots"] = "noindex,follow";
        }
        // line 62
        $context["favicon_config"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 62), "favicon", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()), "metatags", [], "any", false, false, false, 62), "favicon", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()), "metatags", [], "any", false, false, false, 62), "favicon", [], "any", false, false, false, 62)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 62), "favicon", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 62, $this->source); })()), "metatags", [], "any", false, false, false, 62), "favicon", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 62, $this->source); })()), "metatags", [], "any", false, false, false, 62), "favicon", [], "any", false, false, false, 62)) : (true))));
        // line 63
        $context["favicon_enabled"] = ((is_iterable((isset($context["favicon_config"]) || array_key_exists("favicon_config", $context) ? $context["favicon_config"] : (function () { throw new RuntimeError('Variable "favicon_config" does not exist.', 63, $this->source); })()))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["favicon_config"] ?? null), "enabled", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_config"]) || array_key_exists("favicon_config", $context) ? $context["favicon_config"] : (function () { throw new RuntimeError('Variable "favicon_config" does not exist.', 63, $this->source); })()), "enabled", [], "any", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_config"]) || array_key_exists("favicon_config", $context) ? $context["favicon_config"] : (function () { throw new RuntimeError('Variable "favicon_config" does not exist.', 63, $this->source); })()), "enabled", [], "any", false, false, false, 63)) : (true))) : ((isset($context["favicon_config"]) || array_key_exists("favicon_config", $context) ? $context["favicon_config"] : (function () { throw new RuntimeError('Variable "favicon_config" does not exist.', 63, $this->source); })())));
        // line 64
        if ((($tmp = (isset($context["favicon_enabled"]) || array_key_exists("favicon_enabled", $context) ? $context["favicon_enabled"] : (function () { throw new RuntimeError('Variable "favicon_enabled" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            $context["favicon_defaults"] = ["icon" => [32, 57, 76, 96, 128, 192, 228], "shortcut icon" => [128, 196], "apple-touch-icon" => [120, 152, 180]];
        }
        // line 72
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 72, $this->source); })())) && (($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 72), "image", [], "any", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 72, $this->source); })()), "metatags", [], "any", false, false, false, 72), "image", [], "any", false, false, false, 72)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 72, $this->source); })()), "metatags", [], "any", false, false, false, 72), "image", [], "any", false, false, false, 72)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 72), "image", [], "any", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 72, $this->source); })()), "metatags", [], "any", false, false, false, 72), "image", [], "any", false, false, false, 72)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 72, $this->source); })()), "metatags", [], "any", false, false, false, 72), "image", [], "any", false, false, false, 72)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 73
            $context["image"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73))) : (""))));
        }
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "videos", [], "any", true, true, false, 76) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()), "videos", [], "any", false, false, false, 76), 0, [], "array", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 77
            yield "  ";
            // line 78
            $context["video"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 78, $this->source); })()), "videos", [], "any", false, false, false, 78), 0, [], "array", false, false, false, 78);
        }
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "audios", [], "any", true, true, false, 81) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 81, $this->source); })()), "audio", [], "any", false, false, false, 81), 0, [], "array", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 82
            yield "  ";
            // line 83
            $context["audio"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 83, $this->source); })()), "audio", [], "any", false, false, false, 83), 0, [], "array", false, false, false, 83);
        }
        // line 86
        $context["opengraph"] = ["locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 87, $this->source); })()), "language", [], "any", false, false, false, 87), "locale", [], "any", false, false, false, 87), "site_name" => CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "title", [], "any", false, false, false, 88), "type" => "website", "title" =>         // line 90
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 90, $this->source); })()), "description" =>         $this->unwrap()->renderBlock("description", $context, $blocks), "url" => $this->extensions['Cecil\Renderer\Extension\Core']->url($context,         // line 92
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), ["canonical" => true])];
        // line 95
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 95, $this->source); })()))) {
            // line 96
            $context["video_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 96, $this->source); })()));
            // line 97
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 97, $this->source); })()), ["type" => "video"]);
            // line 98
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 98, $this->source); })()), ["video" => (isset($context["video_asset"]) || array_key_exists("video_asset", $context) ? $context["video_asset"] : (function () { throw new RuntimeError('Variable "video_asset" does not exist.', 98, $this->source); })())]);
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 100
(isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 100, $this->source); })()))) {
            // line 101
            $context["audio_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 101, $this->source); })()));
            // line 102
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 102, $this->source); })()), ["type" => "audio"]);
            // line 103
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 103, $this->source); })()), ["audio" => (isset($context["audio_asset"]) || array_key_exists("audio_asset", $context) ? $context["audio_asset"] : (function () { throw new RuntimeError('Variable "audio_asset" does not exist.', 103, $this->source); })())]);
        }
        // line 106
        $context["articles"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 106), "articles", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 106, $this->source); })()), "metatags", [], "any", false, false, false, 106), "articles", [], "any", false, false, false, 106), "blog")) : ("blog"));
        // line 107
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 107, $this->source); })()), "section", [], "any", false, false, false, 107), ((is_iterable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 107, $this->source); })()))) ? ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 107, $this->source); })())) : ([(isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 107, $this->source); })())])))) {
            // line 108
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 108, $this->source); })()), ["type" => "article"]);
        }
        // line 111
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 111, $this->source); })()))) {
            // line 112
            if ( !$this->extensions['Cecil\Renderer\Extension\Core']->isAsset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 112, $this->source); })()))) {
                // line 113
                $context["image_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 113, $this->source); })()));
            } else {
                // line 115
                $context["image_asset"] = (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 115, $this->source); })());
            }
            // line 117
            if (( !$this->extensions['Cecil\Renderer\Extension\Core']->isImageSquare((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 117, $this->source); })())) &&  !$this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 117, $this->source); })())))) {
                // line 118
                $_v0 = (((((("The Open Graph image \"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 118, $this->source); })()), "file", [], "any", false, false, false, 118)) . "\" (") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 118, $this->source); })()), "width", [], "any", false, false, false, 118)) . "x") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 118, $this->source); })()), "height", [], "any", false, false, false, 118)) . " px) should be square or larger");
                trigger_deprecation('', '',                 $_v0." in \"partials/metatags.html.twig\" at line 118.");
            }
            // line 121
            if ($this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 121, $this->source); })()))) {
                // line 122
                $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 122, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 122, $this->source); })()), 1200, 628, true)]);
            } else {
                // line 124
                $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 124, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 124, $this->source); })()), 512, null, true)]);
            }
        }
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 128) || CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 128))) {
            // line 129
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 129, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 129, $this->source); })()), "opengraph", [], "any", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 129, $this->source); })()), "opengraph", [], "any", false, false, false, 129)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 129, $this->source); })()), "opengraph", [], "any", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 129, $this->source); })()), "opengraph", [], "any", false, false, false, 129)) : ([])))));
        }
        // line 132
        $context["facebook"] = ["id" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 132), "facebook", [], "any", false, true, false, 132), "id", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 132, $this->source); })()), "social", [], "any", false, false, false, 132), "facebook", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 132), "facebook", [], "any", false, true, false, 132), "id", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 132, $this->source); })()), "social", [], "any", false, false, false, 132), "facebook", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 132), "facebook", [], "any", false, true, false, 132), "id", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 132, $this->source); })()), "social", [], "any", false, false, false, 132), "facebook", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132))) : (""))))];
        // line 134
        $context["twitter"] = ["site" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 135
($context["site"] ?? null), "social", [], "any", false, true, false, 135), "twitter", [], "any", false, true, false, 135), "site", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 135, $this->source); })()), "social", [], "any", false, false, false, 135), "twitter", [], "any", false, false, false, 135), "site", [], "any", false, false, false, 135))) : ("")), "creator" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 136
($context["page"] ?? null), "social", [], "any", false, true, false, 136), "twitter", [], "any", true, true, false, 136) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "social", [], "any", false, false, false, 136), "twitter", [], "any", false, false, false, 136)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "social", [], "any", false, false, false, 136), "twitter", [], "any", false, false, false, 136)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 136), "twitter", [], "any", false, true, false, 136), "creator", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 136, $this->source); })()), "social", [], "any", false, false, false, 136), "twitter", [], "any", false, false, false, 136), "creator", [], "any", false, false, false, 136))) : (""))))];
        // line 139
        $context["mastodon"] = ["creator" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["page"] ?? null), "social", [], "any", false, true, false, 140), "mastodon", [], "any", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 140, $this->source); })()), "social", [], "any", false, false, false, 140), "mastodon", [], "any", false, false, false, 140)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 140, $this->source); })()), "social", [], "any", false, false, false, 140), "mastodon", [], "any", false, false, false, 140)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 140), "mastodon", [], "any", false, true, false, 140), "creator", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 140, $this->source); })()), "social", [], "any", false, false, false, 140), "mastodon", [], "any", false, false, false, 140), "creator", [], "any", false, false, false, 140))) : (""))))];
        // line 142
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield;
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "
    <title>";
        // line 144
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 145
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\">";
        // line 146
        if (((($tmp = (isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && is_iterable((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 146, $this->source); })())))) {
            yield "
    <meta name=\"keywords\" content=\"";
            // line 147
            yield (string) Twig\Extension\CoreExtension::join((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 147, $this->source); })()), ", ");
            yield "\">";
        }
        // line 149
        if ((($tmp = (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"author\" content=\"";
            // line 150
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 150, $this->source); })()), "name", [], "any", false, false, false, 150));
            yield "\">";
        }
        // line 152
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 152, $this->source); })()))) {
            yield "
    <meta name=\"robots\" content=\"";
            // line 153
            yield (string) (isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 153, $this->source); })());
            yield "\">";
        }
        // line 156
        yield from $this->unwrap()->yieldBlock('metatags_favicon', $context, $blocks);
        // line 185
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 185), "navigation", [], "any", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 185, $this->source); })()), "metatags", [], "any", false, false, false, 185), "navigation", [], "any", false, false, false, 185)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 185, $this->source); })()), "metatags", [], "any", false, false, false, 185), "navigation", [], "any", false, false, false, 185)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 185), "navigation", [], "any", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 185, $this->source); })()), "metatags", [], "any", false, false, false, 185), "navigation", [], "any", false, false, false, 185)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 185, $this->source); })()), "metatags", [], "any", false, false, false, 185), "navigation", [], "any", false, false, false, 185)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 187), "pages", [], "any", true, true, false, 187)) {
                yield "
    <link rel=\"first\" href=\"";
                // line 188
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 188, $this->source); })()), "paginator", [], "any", false, false, false, 188), "links", [], "any", false, false, false, 188), "first", [], "any", false, false, false, 188), ["canonical" => true]);
                yield "\">";
                // line 189
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 189), "links", [], "any", false, true, false, 189), "prev", [], "any", true, true, false, 189)) {
                    yield "
    <link rel=\"prev\" href=\"";
                    // line 190
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 190, $this->source); })()), "paginator", [], "any", false, false, false, 190), "links", [], "any", false, false, false, 190), "prev", [], "any", false, false, false, 190), ["canonical" => true]);
                    yield "\">";
                }
                // line 192
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 192), "links", [], "any", false, true, false, 192), "next", [], "any", true, true, false, 192)) {
                    yield "
    <link rel=\"next\" href=\"";
                    // line 193
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 193, $this->source); })()), "paginator", [], "any", false, false, false, 193), "links", [], "any", false, false, false, 193), "next", [], "any", false, false, false, 193), ["canonical" => true]);
                    yield "\">";
                }
                // line 194
                yield "
    <link rel=\"last\" href=\"";
                // line 195
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })()), "paginator", [], "any", false, false, false, 195), "links", [], "any", false, false, false, 195), "last", [], "any", false, false, false, 195), ["canonical" => true]);
                yield "\">";
            } else {
                // line 198
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", false, true, false, 198), "path", [], "any", true, true, false, 198)) {
                    yield "
    <link rel=\"prev\" href=\"";
                    // line 199
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 199, $this->source); })()), "prev", [], "any", false, false, false, 199), ["canonical" => true]);
                    yield "\">";
                }
                // line 201
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", false, true, false, 201), "path", [], "any", true, true, false, 201)) {
                    yield "
    <link rel=\"next\" href=\"";
                    // line 202
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 202, $this->source); })()), "next", [], "any", false, false, false, 202), ["canonical" => true]);
                    yield "\">";
                }
            }
        }
        // line 207
        yield from $this->unwrap()->yieldBlock('metatags_alternates', $context, $blocks);
        // line 210
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/feeds-from-section.html.twig", ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 210, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 210, $this->source); })())], false);
        // line 212
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates-languages.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 212, $this->source); })())], false);
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 220, $this->source); })()), "social", [], "any", false, false, false, 220), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 220, $this->source); })()), "social", [], "any", false, false, false, 220), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 220, $this->source); })()), "social", [], "any", false, false, false, 220), [])) : ([])))), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "url", [], "array", true, true, false, 220); }));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            yield "
    <link rel=\"me\" href=\"";
            // line 221
            yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 221);
            yield "\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 224
        yield from $this->unwrap()->yieldBlock('metatags_og', $context, $blocks);
        // line 270
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta property=\"fb:profile_id\" content=\"";
            // line 271
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271);
            yield "\">";
        }
        // line 274
        yield from $this->unwrap()->yieldBlock('metatags_twitter', $context, $blocks);
        // line 313
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mastodon"]) || array_key_exists("mastodon", $context) ? $context["mastodon"] : (function () { throw new RuntimeError('Variable "mastodon" does not exist.', 313, $this->source); })()), "creator", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 313), "mastodon", [], "any", true, true, false, 313) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 313, $this->source); })()), "metatags", [], "any", false, false, false, 313), "mastodon", [], "any", false, false, false, 313)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 313, $this->source); })()), "metatags", [], "any", false, false, false, 313), "mastodon", [], "any", false, false, false, 313)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 313), "mastodon", [], "any", true, true, false, 313) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 313, $this->source); })()), "metatags", [], "any", false, false, false, 313), "mastodon", [], "any", false, false, false, 313)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 313, $this->source); })()), "metatags", [], "any", false, false, false, 313), "mastodon", [], "any", false, false, false, 313)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "
    <meta name=\"fediverse:creator\" content=\"@";
            // line 314
            yield (string) Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mastodon"]) || array_key_exists("mastodon", $context) ? $context["mastodon"] : (function () { throw new RuntimeError('Variable "mastodon" does not exist.', 314, $this->source); })()), "creator", [], "any", false, false, false, 314), "@", "left");
            yield "\">";
        }
        // line 317
        yield from $this->unwrap()->yieldBlock('metatags_dc', $context, $blocks);
        // line 339
        yield from $this->unwrap()->yieldBlock('metatags_structured_data', $context, $blocks);
        return; yield;
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (string) (isset($context["title_html"]) || array_key_exists("title_html", $context) ? $context["title_html"] : (function () { throw new RuntimeError('Variable "title_html" does not exist.', 144, $this->source); })());
        return; yield;
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (string) (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 145, $this->source); })());
        return; yield;
    }

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 157
        if ((($tmp = (isset($context["favicon_enabled"]) || array_key_exists("favicon_enabled", $context) ? $context["favicon_enabled"] : (function () { throw new RuntimeError('Variable "favicon_enabled" does not exist.', 157, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield (string) $this->env->getRuntime('Twig\Extra\Cache\CacheRuntime')->getCache()->get($this->extensions['Cecil\Renderer\Extension\Core']->cacheKey($context, "metatags-favicon"), function (\Symfony\Contracts\Cache\ItemInterface $item) use ($context, $macros, $blocks) {
                return \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 160
                    $context["favicon_svg"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset("favicon.svg", ["ignore_missing" => true]);
                    // line 161
                    if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_svg"]) || array_key_exists("favicon_svg", $context) ? $context["favicon_svg"] : (function () { throw new RuntimeError('Variable "favicon_svg" does not exist.', 161, $this->source); })()), "missing", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "
    <link rel=\"icon\" sizes=\"any\" href=\"";
                        // line 162
                        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_svg"]) || array_key_exists("favicon_svg", $context) ? $context["favicon_svg"] : (function () { throw new RuntimeError('Variable "favicon_svg" does not exist.', 162, $this->source); })()), ["canonical" => false]);
                        yield "\" type=\"image/svg+xml\">";
                    }
                    // line 165
                    $context["favicon_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 165), "favicon", [], "any", false, true, false, 165), "image", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 165, $this->source); })()), "metatags", [], "any", false, false, false, 165), "favicon", [], "any", false, false, false, 165), "image", [], "any", false, false, false, 165), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true]);
                    // line 166
                    if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 166, $this->source); })()), "missing", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 167
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 167), "favicon", [], "any", false, true, false, 167), "sizes", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 167, $this->source); })()), "metatags", [], "any", false, false, false, 167), "favicon", [], "any", false, false, false, 167), "sizes", [], "any", false, false, false, 167), (isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 167, $this->source); })()))) : ((isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 167, $this->source); })()))));
                        foreach ($context['_seq'] as $context["favicon_variant"] => $context["favicon_sizes"]) {
                            // line 168
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), $context["favicon_sizes"])), function ($__size__) use ($context, $macros) { $context["size"] = $__size__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 168, $this->source); })()), "width", [], "any", false, false, false, 168) >= $context["size"]); }));
                            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                                yield "
    <link rel=\"";
                                // line 169
                                yield (string) $context["favicon_variant"];
                                yield "\" sizes=\"";
                                yield (string) $context["size"];
                                yield "x";
                                yield (string) $context["size"];
                                yield "\" href=\"";
                                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 169, $this->source); })()), $context["size"]), ["canonical" => false]);
                                yield "\" type=\"";
                                yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 169, $this->source); })()), "subtype", [], "any", false, false, false, 169);
                                yield "\">";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['size'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['favicon_variant'], $context['favicon_sizes'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                    }
                    // line 174
                    $context["favicon_ico"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset("favicon.ico", ["ignore_missing" => true]);
                    // line 175
                    if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 175, $this->source); })()), "missing", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 176
                        $context["favicon_ico_48"] = $this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset("favicon.ico", ["fingerprint" => false]), 48);
                        yield "
    <link rel=\"icon\" href=\"";
                        // line 177
                        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico_48"]) || array_key_exists("favicon_ico_48", $context) ? $context["favicon_ico_48"] : (function () { throw new RuntimeError('Variable "favicon_ico_48" does not exist.', 177, $this->source); })()), ["canonical" => false]);
                        yield "\">
    <link rel=\"icon\" href=\"";
                        // line 178
                        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 178, $this->source); })()), ["canonical" => false]);
                        yield "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
                        // line 179
                        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 179, $this->source); })()), ["canonical" => false]);
                        yield "\" type=\"image/vnd.microsoft.icon\">
    <link rel=\"shortcut icon\" href=\"";
                        // line 180
                        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 180, $this->source); })()), ["canonical" => false]);
                        yield "\" type=\"image/x-icon\">";
                    }
                    return; yield;
                })());;
            })
;
        }
        return; yield;
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_alternates(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates.html.twig", ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 208, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 208, $this->source); })())], false);
        return; yield;
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 225
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 225), "og", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 225, $this->source); })()), "metatags", [], "any", false, false, false, 225), "og", [], "any", false, false, false, 225)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 225, $this->source); })()), "metatags", [], "any", false, false, false, 225), "og", [], "any", false, false, false, 225)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 225), "og", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 225, $this->source); })()), "metatags", [], "any", false, false, false, 225), "og", [], "any", false, false, false, 225)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 225, $this->source); })()), "metatags", [], "any", false, false, false, 225), "og", [], "any", false, false, false, 225)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta property=\"og:locale\" content=\"";
            // line 226
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 226, $this->source); })()), "locale", [], "any", false, false, false, 226);
            yield "\">
    <meta property=\"og:site_name\" content=\"";
            // line 227
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 227, $this->source); })()), "site_name", [], "any", false, false, false, 227);
            yield "\">
    <meta property=\"og:title\" content=\"";
            // line 228
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 228, $this->source); })()), "title", [], "any", false, false, false, 228);
            yield "\">
    <meta property=\"og:description\" content=\"";
            // line 229
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 229, $this->source); })()), "description", [], "any", false, false, false, 229);
            yield "\">
    <meta property=\"og:url\" content=\"";
            // line 230
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 230, $this->source); })()), "url", [], "any", false, false, false, 230);
            yield "\">";
            // line 231
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 231, $this->source); })()), "name", [], "any", false, false, false, 231))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta property=\"og:author\" content=\"";
                // line 232
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 232, $this->source); })()), "name", [], "any", false, false, false, 232));
                yield "\">";
            }
            // line 233
            yield "
    <meta property=\"og:type\" content=\"";
            // line 234
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 234, $this->source); })()), "type", [], "any", false, false, false, 234);
            yield "\">";
            // line 235
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 235, $this->source); })()), "type", [], "any", false, false, false, 235) == "article")) {
                yield "
    <meta property=\"article:published_time\" content=\"";
                // line 236
                yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 236, $this->source); })()), "date", [], "any", false, false, false, 236), "c");
                yield "\">";
                // line 237
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "updated", [], "any", true, true, false, 237)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 237, $this->source); })()), "updated", [], "any", false, false, false, 237))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "
    <meta property=\"article:modified_time\" content=\"";
                    // line 238
                    yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 238, $this->source); })()), "updated", [], "any", false, false, false, 238), "c");
                    yield "\">";
                }
                // line 240
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 240)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 240, $this->source); })()), "name", [], "any", false, false, false, 240))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "
    <meta property=\"article:author\" content=\"";
                    // line 241
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 241, $this->source); })()), "name", [], "any", false, false, false, 241));
                    yield "\">";
                }
                // line 243
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 243, $this->source); })()), "tags", [], "any", false, false, false, 243), [])) : ([])));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    yield "
    <meta property=\"article:tag\" content=\"";
                    // line 244
                    yield (string) $this->escaper->escape($context["tag"]);
                    yield "\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
            }
            // line 247
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 247, $this->source); })()), "type", [], "any", false, false, false, 247) == "video")) {
                yield "
    <meta property=\"og:video\" content=\"";
                // line 248
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 248, $this->source); })()), "video", [], "any", false, false, false, 248), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:url\" content=\"";
                // line 249
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 249, $this->source); })()), "video", [], "any", false, false, false, 249), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:secure_url\" content=\"";
                // line 250
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 250, $this->source); })()), "video", [], "any", false, false, false, 250), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:type\" content=\"";
                // line 251
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 251, $this->source); })()), "video", [], "any", false, false, false, 251), "subtype", [], "any", false, false, false, 251);
                yield "\">
    <meta property=\"og:video:width\" content=\"";
                // line 252
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 252, $this->source); })()), "video", [], "any", false, false, false, 252), "video", [], "any", false, false, false, 252), "width", [], "any", false, false, false, 252);
                yield "\">
    <meta property=\"og:video:height\" content=\"";
                // line 253
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 253, $this->source); })()), "video", [], "any", false, false, false, 253), "video", [], "any", false, false, false, 253), "height", [], "any", false, false, false, 253);
                yield "\">";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 254
(isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 254, $this->source); })()), "type", [], "any", false, false, false, 254) == "audio")) {
                yield "
    <meta property=\"og:audio\" content=\"";
                // line 255
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 255, $this->source); })()), "audio", [], "any", false, false, false, 255), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:url\" content=\"";
                // line 256
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 256, $this->source); })()), "audio", [], "any", false, false, false, 256), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:secure_url\" content=\"";
                // line 257
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 257, $this->source); })()), "audio", [], "any", false, false, false, 257), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:type\" content=\"";
                // line 258
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 258, $this->source); })()), "audio", [], "any", false, false, false, 258), "subtype", [], "any", false, false, false, 258);
                yield "\">";
            }
            // line 260
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 260)) {
                yield "
    <meta property=\"og:image\" content=\"";
                // line 261
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 261, $this->source); })()), "image", [], "any", false, false, false, 261), ["canonical" => true]);
                yield "\">
    <meta property=\"og:image:type\" content=\"";
                // line 262
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 262, $this->source); })()), "image", [], "any", false, false, false, 262), "subtype", [], "any", false, false, false, 262);
                yield "\">
    <meta property=\"og:image:width\" content=\"";
                // line 263
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 263, $this->source); })()), "image", [], "any", false, false, false, 263), "width", [], "any", false, false, false, 263);
                yield "\">
    <meta property=\"og:image:height\" content=\"";
                // line 264
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 264, $this->source); })()), "image", [], "any", false, false, false, 264), "height", [], "any", false, false, false, 264);
                yield "\">
    <meta property=\"og:image:alt\" content=\"";
                // line 265
                yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 265, $this->source); })()), "title", [], "any", false, false, false, 265);
                yield "\">";
            }
        }
        return; yield;
    }

    // line 274
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 275
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 275), "twitter", [], "any", true, true, false, 275) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 275, $this->source); })()), "metatags", [], "any", false, false, false, 275), "twitter", [], "any", false, false, false, 275)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 275, $this->source); })()), "metatags", [], "any", false, false, false, 275), "twitter", [], "any", false, false, false, 275)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 275), "twitter", [], "any", true, true, false, 275) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 275, $this->source); })()), "metatags", [], "any", false, false, false, 275), "twitter", [], "any", false, false, false, 275)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 275, $this->source); })()), "metatags", [], "any", false, false, false, 275), "twitter", [], "any", false, false, false, 275)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"twitter:title\" content=\"";
            // line 276
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 276, $this->source); })()), "title", [], "any", false, false, false, 276);
            yield "\">
    <meta name=\"twitter:description\" content=\"";
            // line 277
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 277, $this->source); })()), "description", [], "any", false, false, false, 277);
            yield "\">";
            // line 278
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "video", [], "any", true, true, false, 278)) {
                yield "
    <meta name=\"twitter:card\" content=\"player\">";
                // line 280
                if (CoreExtension::inFilter("embed", CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 280, $this->source); })()), "output", [], "any", false, false, false, 280))) {
                    yield "
    <meta name=\"twitter:player\" content=\"";
                    // line 281
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 281, $this->source); })()), ["canonical" => true, "format" => "embed"]);
                    yield "\">";
                } else {
                    // line 283
                    $_v1 = Twig\Extension\CoreExtension::sprintf("The \"embed\" output format is required by \"twitter:card:player\" for page \"%s\"", CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 283, $this->source); })()), "filepath", [], "any", false, false, false, 283));
                    trigger_deprecation('', '',                     $_v1." in \"partials/metatags.html.twig\" at line 283.");
                }
                // line 284
                yield "
    <meta name=\"twitter:player:width\" content=\"";
                // line 285
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 285, $this->source); })()), "video", [], "any", false, false, false, 285), "video", [], "any", false, false, false, 285), "width", [], "any", false, false, false, 285);
                yield "\">
    <meta name=\"twitter:player:height\" content=\"";
                // line 286
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 286, $this->source); })()), "video", [], "any", false, false, false, 286), "video", [], "any", false, false, false, 286), "height", [], "any", false, false, false, 286);
                yield "\">
    <meta name=\"twitter:player:stream\" content=\"";
                // line 287
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 287, $this->source); })()), "video", [], "any", false, false, false, 287), ["canonical" => true]);
                yield "\">
    <meta name=\"twitter:player:stream:content_type\" content=\"";
                // line 288
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 288, $this->source); })()), "video", [], "any", false, false, false, 288), "subtype", [], "any", false, false, false, 288);
                yield "\">";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 289
($context["opengraph"] ?? null), "audio", [], "any", true, true, false, 289)) {
                yield "
    <meta name=\"twitter:card\" content=\"player\">
    <meta name=\"twitter:player\" content=\"";
                // line 291
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 291, $this->source); })()), ["canonical" => true, "format" => "embed"]);
                yield "\">";
            }
            // line 293
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 293)) {
                yield "
    <meta name=\"twitter:image\" content=\"";
                // line 294
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 294, $this->source); })()), "image", [], "any", false, false, false, 294), ["canonical" => true]);
                yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
                // line 295
                yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 295, $this->source); })()), "title", [], "any", false, false, false, 295);
                yield "\">";
                // line 296
                if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "video", [], "any", true, true, false, 296) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "audio", [], "any", true, true, false, 296))) {
                    // line 297
                    if ($this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 297, $this->source); })()), "image", [], "any", false, false, false, 297))) {
                        yield "
    <meta name=\"twitter:card\" content=\"summary_large_image\">";
                    } else {
                        // line 299
                        yield "
    <meta name=\"twitter:card\" content=\"summary\">";
                    }
                }
            }
            // line 304
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 304, $this->source); })()), "site", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"twitter:site\" content=\"@";
                // line 305
                yield (string) Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 305, $this->source); })()), "site", [], "any", false, false, false, 305), "@", "left");
                yield "\">";
            }
            // line 307
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 307, $this->source); })()), "creator", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"twitter:creator\" content=\"@";
                // line 308
                yield (string) Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 308, $this->source); })()), "creator", [], "any", false, false, false, 308), "@", "left");
                yield "\">";
            }
        }
        return; yield;
    }

    // line 317
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_dc(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 318
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 318), "dc", [], "any", true, true, false, 318) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 318, $this->source); })()), "metatags", [], "any", false, false, false, 318), "dc", [], "any", false, false, false, 318)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 318, $this->source); })()), "metatags", [], "any", false, false, false, 318), "dc", [], "any", false, false, false, 318)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 318), "dc", [], "any", true, true, false, 318) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 318, $this->source); })()), "metatags", [], "any", false, false, false, 318), "dc", [], "any", false, false, false, 318)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 318, $this->source); })()), "metatags", [], "any", false, false, false, 318), "dc", [], "any", false, false, false, 318)) : (false))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <link rel=\"schema.DC\" href=\"https://purl.org/dc/elements/1.1/\">
    <meta name=\"DC.title\" content=\"";
            // line 320
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 320, $this->source); })()), "title", [], "any", false, false, false, 320);
            yield "\">
    <meta name=\"DC.description\" content=\"";
            // line 321
            yield (string) (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 321, $this->source); })());
            yield "\">";
            // line 322
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 322, $this->source); })()))) {
                yield "
    <meta name=\"DC.subject\" content=\"";
                // line 323
                yield (string) Twig\Extension\CoreExtension::join((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 323, $this->source); })()), ", ");
                yield "\">";
            }
            // line 325
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 325, $this->source); })()), "date", [], "any", false, false, false, 325))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"DC.date\" content=\"";
                // line 326
                yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 326, $this->source); })()), "date", [], "any", false, false, false, 326), "Y-m-d");
                yield "\">";
            }
            // line 328
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 328, $this->source); })()), "name", [], "any", false, false, false, 328))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"DC.creator\" content=\"";
                // line 329
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 329, $this->source); })()), "name", [], "any", false, false, false, 329));
                yield "\">";
            }
            // line 330
            yield "
    <meta name=\"DC.publisher\" content=\"";
            // line 331
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 331, $this->source); })()), "title", [], "any", false, false, false, 331));
            yield "\">
    <meta name=\"DC.type\" content=\"Text\">
    <meta name=\"DC.format\" content=\"text/html\">
    <meta name=\"DC.identifier\" content=\"";
            // line 334
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 334, $this->source); })()), "url", [], "any", false, false, false, 334);
            yield "\">
    <meta name=\"DC.language\" content=\"";
            // line 335
            yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 335, $this->source); })()), "language", [], "any", false, false, false, 335), "locale", [], "any", false, false, false, 335);
            yield "\">";
        }
        return; yield;
    }

    // line 339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_structured_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 341
        $context["data_enabled"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 341), "data", [], "any", true, true, false, 341) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 341, $this->source); })()), "metatags", [], "any", false, false, false, 341), "data", [], "any", false, false, false, 341)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 341, $this->source); })()), "metatags", [], "any", false, false, false, 341), "data", [], "any", false, false, false, 341)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 341), "jsonld", [], "any", true, true, false, 341) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 341, $this->source); })()), "metatags", [], "any", false, false, false, 341), "jsonld", [], "any", false, false, false, 341)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 341, $this->source); })()), "metatags", [], "any", false, false, false, 341), "jsonld", [], "any", false, false, false, 341)) : (false))));
        // line 342
        $context["data_enabled"] = ((is_iterable((isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 342, $this->source); })()))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["data_enabled"] ?? null), "enabled", [], "any", true, true, false, 342) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 342, $this->source); })()), "enabled", [], "any", false, false, false, 342)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 342, $this->source); })()), "enabled", [], "any", false, false, false, 342)) : (true))) : ((isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 342, $this->source); })())));
        // line 343
        $context["data_page"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 343), "data", [], "any", true, true, false, 343) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 343, $this->source); })()), "metatags", [], "any", false, false, false, 343), "data", [], "any", false, false, false, 343)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 343, $this->source); })()), "metatags", [], "any", false, false, false, 343), "data", [], "any", false, false, false, 343)) : (null));
        // line 344
        if ( !(null === (isset($context["data_page"]) || array_key_exists("data_page", $context) ? $context["data_page"] : (function () { throw new RuntimeError('Variable "data_page" does not exist.', 344, $this->source); })()))) {
            // line 345
            $context["data_enabled"] = ((is_iterable((isset($context["data_page"]) || array_key_exists("data_page", $context) ? $context["data_page"] : (function () { throw new RuntimeError('Variable "data_page" does not exist.', 345, $this->source); })()))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["data_page"] ?? null), "enabled", [], "any", true, true, false, 345) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_page"]) || array_key_exists("data_page", $context) ? $context["data_page"] : (function () { throw new RuntimeError('Variable "data_page" does not exist.', 345, $this->source); })()), "enabled", [], "any", false, false, false, 345)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_page"]) || array_key_exists("data_page", $context) ? $context["data_page"] : (function () { throw new RuntimeError('Variable "data_page" does not exist.', 345, $this->source); })()), "enabled", [], "any", false, false, false, 345)) : ((isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 345, $this->source); })())))) : ((isset($context["data_page"]) || array_key_exists("data_page", $context) ? $context["data_page"] : (function () { throw new RuntimeError('Variable "data_page" does not exist.', 345, $this->source); })())));
        }
        // line 347
        if ((($tmp = (isset($context["data_enabled"]) || array_key_exists("data_enabled", $context) ? $context["data_enabled"] : (function () { throw new RuntimeError('Variable "data_enabled" does not exist.', 347, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 350
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "partials/jsonld.js.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 350, $this->source); })()), "title" => (isset($context["title_raw"]) || array_key_exists("title_raw", $context) ? $context["title_raw"] : (function () { throw new RuntimeError('Variable "title_raw" does not exist.', 350, $this->source); })()), "author" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 350, $this->source); })()), "image" => (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 350, $this->source); })())], false);
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/metatags.html.twig";
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
        return array (  854 => 350,  852 => 347,  849 => 345,  847 => 344,  845 => 343,  843 => 342,  841 => 341,  834 => 339,  827 => 335,  823 => 334,  817 => 331,  814 => 330,  810 => 329,  806 => 328,  802 => 326,  798 => 325,  794 => 323,  790 => 322,  787 => 321,  783 => 320,  778 => 318,  771 => 317,  763 => 308,  759 => 307,  755 => 305,  751 => 304,  745 => 299,  740 => 297,  738 => 296,  735 => 295,  731 => 294,  727 => 293,  723 => 291,  718 => 289,  715 => 288,  711 => 287,  707 => 286,  703 => 285,  700 => 284,  696 => 283,  692 => 281,  688 => 280,  684 => 278,  681 => 277,  677 => 276,  673 => 275,  666 => 274,  658 => 265,  654 => 264,  650 => 263,  646 => 262,  642 => 261,  638 => 260,  634 => 258,  630 => 257,  626 => 256,  622 => 255,  618 => 254,  615 => 253,  611 => 252,  607 => 251,  603 => 250,  599 => 249,  595 => 248,  591 => 247,  582 => 244,  576 => 243,  572 => 241,  568 => 240,  564 => 238,  560 => 237,  557 => 236,  553 => 235,  550 => 234,  547 => 233,  543 => 232,  539 => 231,  536 => 230,  532 => 229,  528 => 228,  524 => 227,  520 => 226,  516 => 225,  509 => 224,  504 => 208,  497 => 207,  485 => 180,  481 => 179,  477 => 178,  473 => 177,  469 => 176,  467 => 175,  465 => 174,  443 => 169,  437 => 168,  433 => 167,  431 => 166,  429 => 165,  425 => 162,  421 => 161,  419 => 160,  416 => 158,  414 => 157,  407 => 156,  396 => 145,  385 => 144,  380 => 339,  378 => 317,  374 => 314,  370 => 313,  368 => 274,  364 => 271,  360 => 270,  358 => 224,  350 => 221,  344 => 220,  342 => 212,  340 => 210,  338 => 207,  332 => 202,  328 => 201,  324 => 199,  320 => 198,  316 => 195,  313 => 194,  309 => 193,  305 => 192,  301 => 190,  297 => 189,  294 => 188,  290 => 187,  288 => 185,  286 => 156,  282 => 153,  278 => 152,  274 => 150,  270 => 149,  266 => 147,  262 => 146,  259 => 145,  255 => 144,  252 => 143,  241 => 142,  239 => 140,  238 => 139,  236 => 136,  235 => 135,  234 => 134,  232 => 132,  229 => 129,  227 => 128,  223 => 124,  220 => 122,  218 => 121,  214 => 118,  212 => 117,  209 => 115,  206 => 113,  204 => 112,  202 => 111,  199 => 108,  197 => 107,  195 => 106,  192 => 103,  190 => 102,  188 => 101,  186 => 100,  184 => 98,  182 => 97,  180 => 96,  178 => 95,  176 => 92,  175 => 90,  174 => 88,  173 => 87,  172 => 86,  169 => 83,  167 => 82,  165 => 81,  162 => 78,  160 => 77,  158 => 76,  155 => 73,  153 => 72,  150 => 65,  148 => 64,  146 => 63,  144 => 62,  141 => 59,  139 => 58,  137 => 57,  133 => 53,  131 => 52,  128 => 50,  126 => 49,  124 => 48,  121 => 46,  119 => 44,  117 => 42,  115 => 40,  113 => 38,  107 => 32,  105 => 31,  103 => 30,  101 => 29,  99 => 28,  97 => 27,  95 => 26,  91 => 22,  89 => 21,  87 => 20,  85 => 19,  83 => 18,  81 => 17,  78 => 14,  76 => 13,  74 => 12,  72 => 11,  70 => 10,  68 => 9,  66 => 8,  64 => 7,  62 => 6,  60 => 5,  58 => 3,  56 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/metatags.html.twig", "phar://C:/Users/Baraka24/Desktop/TrustCar/cecil.phar/resources/layouts/partials/metatags.html.twig");
    }
}
