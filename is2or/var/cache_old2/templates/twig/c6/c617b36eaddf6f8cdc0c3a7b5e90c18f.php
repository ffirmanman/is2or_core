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

/* __string_template__6b336292a7f8784f9dff94ab73b1ff55 */
class __TwigTemplate_1f43b4163aa5c397a54d69e34e3ff74d extends Template
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
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_f_subj", ["[order]" => CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1)])]);
        yield "
    ";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 2)]);
            yield " ";
        } else {
            yield " ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            yield ",  ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer");
            yield " ";
        }
        // line 3
        yield "    <br />
    ";
        // line 4
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_default_text", ["[status]" => CoreExtension::getAttribute($this->env, $this->source, ($context["order_status"] ?? null), "description", [], "any", false, false, false, 4)]);
        yield "
    <br />
    <br /> ";
        // line 6
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->includeDocFunction($this->env, $context, "order.summary", CoreExtension::getAttribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 6));
        yield "
  ";
        // line 7
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__6b336292a7f8784f9dff94ab73b1ff55";
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
        return array (  65 => 7,  61 => 6,  56 => 4,  53 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6b336292a7f8784f9dff94ab73b1ff55", "");
    }
}
