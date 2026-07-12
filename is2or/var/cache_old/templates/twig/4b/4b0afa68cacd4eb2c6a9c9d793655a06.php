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

/* __string_template__70f7c2359dc8d4abe0286e7818fb218e */
class __TwigTemplate_f33de5f02b02c59fad43404e2451d599 extends Template
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
        yield "<table>
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\" width=\"20%\">";
        // line 4
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "image", [], "any", false, false, false, 4);
        yield "
    </td>
    <td style=\"vertical-align: middle; ";
        // line 6
        if ((($context["language_direction"] ?? null) == "rtl")) {
            yield "text-align: right;";
        } else {
            yield "text-align: left;";
        }
        yield "\" width=\"80%\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: bold;\"><a href=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "product_url", [], "any", false, false, false, 6);
        yield "\">";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 6);
        yield "</a></strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif; ";
        // line 10
        if ((($context["language_direction"] ?? null) == "rtl")) {
            yield "text-align: right;";
        } else {
            yield "text-align: left;";
        }
        yield "\"><span style=\"font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10)) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10);
            yield "<br> ";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10)) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10);
        }
        yield "</span>
    </td>
</tr>
</tbody>
</table>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__70f7c2359dc8d4abe0286e7818fb218e";
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
        return array (  63 => 10,  48 => 6,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__70f7c2359dc8d4abe0286e7818fb218e", "");
    }
}
