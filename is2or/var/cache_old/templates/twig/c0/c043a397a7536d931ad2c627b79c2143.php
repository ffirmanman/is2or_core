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

/* __string_template__9eb71b8630e3e21f097edb5b53781ecf */
class __TwigTemplate_f93ad20d5301b1e501dbaa914d92c423 extends Template
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

";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 3)) {
            // line 4
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 4)]);
            yield "
";
        } else {
            // line 6
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            yield ",
";
        }
        // line 8
        yield "<br><br>
";
        // line 9
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hybrid_auth.password_generated");
        yield ": ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "password", [], "any", false, false, false, 9);
        yield "<br> <br />
";
        // line 10
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hybrid_auth.change_password");
        yield ": <br>
<a href=\"";
        // line 11
        yield ($context["url"] ?? null);
        yield "\">";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
        yield "</a>
<br />

";
        // line 14
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__9eb71b8630e3e21f097edb5b53781ecf";
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
        return array (  76 => 14,  68 => 11,  64 => 10,  58 => 9,  55 => 8,  50 => 6,  45 => 4,  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9eb71b8630e3e21f097edb5b53781ecf", "");
    }
}
