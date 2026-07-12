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

/* __string_template__0cb8ffaba75c90e473a70bee2652bd25 */
class __TwigTemplate_aa27e97b69199dfa54f51b993b4364e2 extends Template
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
        yield "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "ship_to");
        yield "</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
        // line 3
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "firstname", [], "any", false, false, false, 3);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "lastname", [], "any", false, false, false, 3);
        yield "</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 6
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_address", [], "any", false, false, false, 6);
        yield " <br>";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_address_2", [], "any", false, false, false, 6);
        yield "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_city", [], "any", false, false, false, 9);
        yield ", ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_state_descr", [], "any", false, false, false, 9);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_zipcode", [], "any", false, false, false, 9);
        yield "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "s_country_descr", [], "any", false, false, false, 12);
        yield "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <span dir=\"ltr\">";
        // line 15
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 15);
        yield "</span>
    </p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__0cb8ffaba75c90e473a70bee2652bd25";
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
        return array (  76 => 15,  70 => 12,  60 => 9,  52 => 6,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0cb8ffaba75c90e473a70bee2652bd25", "");
    }
}
