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

/* __string_template__82dd6f492707c854d2e126ca02bed132 */
class __TwigTemplate_b4375723eae5213c85f5f5b0da5d0991 extends Template
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
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification_header")]);
        yield "
    ";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            yield " ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)]);
            yield " ";
        } else {
            yield " ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            yield ", ";
        }
        // line 3
        yield "    <br>
    ";
        // line 4
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification_header");
        yield "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "user_account_information");
        yield "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "login_url");
        yield ":</b></td>
        <td><a href=\"";
        // line 11
        yield ($context["login_url"] ?? null);
        yield "\">";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["login_url"] ?? null));
        yield "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email");
        yield ":</b></td>
        <td><a>";
        // line 15
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "email", [], "any", false, false, false, 15);
        yield "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password");
        yield ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        yield ($context["forgot_pass_url"] ?? null);
        yield "\">";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "forgot_password_question");
        yield "</a>)</td>
      </tr>
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 26
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "billing_address");
        yield "</h4>
          <strong>";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_firstname", [], "any", false, false, false, 27);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_lastname", [], "any", false, false, false, 27);
        yield "</strong><br>
          ";
        // line 28
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_address_2", [], "any", false, false, false, 28);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_address", [], "any", false, false, false, 28);
        yield "<br>
          ";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_city", [], "any", false, false, false, 29);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_country", [], "any", false, false, false, 29);
        yield " <br>
          ";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "b_phone", [], "any", false, false, false, 30);
        yield " <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 38
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        yield " ";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "address");
        yield "</h4>
          <strong>";
        // line 39
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_firstname", [], "any", false, false, false, 39);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_lastname", [], "any", false, false, false, 39);
        yield "</strong><br>
          ";
        // line 40
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_address_2", [], "any", false, false, false, 40);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_address", [], "any", false, false, false, 40);
        yield "<br>
          ";
        // line 41
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_city", [], "any", false, false, false, 41);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_country", [], "any", false, false, false, 41);
        yield " <br>
          ";
        // line 42
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_data"] ?? null), "s_phone", [], "any", false, false, false, 42);
        yield " <br>
        </td>
      </tr>
    </table>

  ";
        // line 47
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__82dd6f492707c854d2e126ca02bed132";
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
        return array (  170 => 47,  162 => 42,  156 => 41,  150 => 40,  144 => 39,  138 => 38,  127 => 30,  121 => 29,  115 => 28,  109 => 27,  105 => 26,  93 => 19,  89 => 18,  83 => 15,  79 => 14,  71 => 11,  67 => 10,  61 => 7,  55 => 4,  52 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__82dd6f492707c854d2e126ca02bed132", "");
    }
}
