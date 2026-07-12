<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4c0c7fa2325ca4896a1bcfb7c706a82b */
class __TwigTemplate_50d70270301e247257da72418db98209 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        yield "

  <table>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["element_id"] => $context["element"]) {
            // line 5
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 5) == Twig\Extension\CoreExtension::constant("FORM_SEPARATOR"))) {
                // line 6
                yield "<tr>
    <td colspan=\"2\"><hr width=\"100%\" /></td>
</tr>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 9
$context["element"], "element_type", [], "any", false, false, false, 9) == Twig\Extension\CoreExtension::constant("FORM_HEADER"))) {
                // line 10
                yield "<tr>
    <td colspan=\"2\"><b>";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["element"], "description", [], "any", false, false, false, 11);
                yield "</b></td>
</tr>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 13
$context["element"], "element_type", [], "any", false, false, false, 13) != Twig\Extension\CoreExtension::constant("FORM_FILE"))) {
                // line 14
                yield "<tr>
    <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["element"], "description", [], "any", false, false, false, 15);
                yield ":&nbsp;</td>
    <td>
        ";
                // line 17
                $context["value"] = (($__internal_compile_0 = ($context["form_values"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["element_id"]] ?? null) : null);
                // line 18
                yield "
        ";
                // line 19
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 19) == Twig\Extension\CoreExtension::constant("FORM_SELECT")) || (CoreExtension::getAttribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 19) == Twig\Extension\CoreExtension::constant("FORM_RADIO")))) {
                    // line 20
                    yield "            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["element"], "variants", [], "any", false, false, false, 20)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["value"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 20);
                    yield "
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 21
$context["element"], "element_type", [], "any", false, false, false, 21) == Twig\Extension\CoreExtension::constant("FORM_CHECKBOX"))) {
                    // line 22
                    yield "            ";
                    if ((($context["value"] ?? null) == "Y")) {
                        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "yes");
                    } else {
                        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "no");
                    }
                    // line 23
                    yield "        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 23) == Twig\Extension\CoreExtension::constant("FORM_TEXTAREA"))) {
                    // line 24
                    yield "            ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true));
                    yield "
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 25
$context["element"], "element_type", [], "any", false, false, false, 25) == Twig\Extension\CoreExtension::constant("FORM_DATE"))) {
                    // line 26
                    yield "            ";
                    yield $this->extensions['Tygh\Twig\TwigCoreExtension']->dateFilter(($context["value"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "Appearance", [], "any", false, false, false, 26), "date_format", [], "any", false, false, false, 26));
                    yield "
        ";
                } else {
                    // line 28
                    yield "            ";
                    yield ($context["value"] ?? null);
                    yield "
        ";
                }
                // line 30
                yield "    </td>
</tr>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['element_id'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "</table>

";
        // line 36
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__4c0c7fa2325ca4896a1bcfb7c706a82b";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 36,  127 => 34,  118 => 30,  112 => 28,  106 => 26,  104 => 25,  99 => 24,  96 => 23,  89 => 22,  87 => 21,  82 => 20,  80 => 19,  77 => 18,  75 => 17,  70 => 15,  67 => 14,  65 => 13,  60 => 11,  57 => 10,  55 => 9,  50 => 6,  48 => 5,  44 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4c0c7fa2325ca4896a1bcfb7c706a82b", "");
    }
}
