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

/* admin/formations/_form.html.twig */
class __TwigTemplate_0a05835d2b642bdaeb0830b6796e5706 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formations/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formations/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'row');
        yield "
        </div>
        <div class=\"col-md-6 mb-3\">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 7, $this->source); })()), "publishedAt", [], "any", false, false, false, 7), 'row');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 12, $this->source); })()), "videoId", [], "any", false, false, false, 12), 'row');
        yield "
        </div>
        <div class=\"col-md-6 mb-3\">
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 15, $this->source); })()), "playlist", [], "any", false, false, false, 15), 'row');
        yield "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 19, $this->source); })()), "categories", [], "any", false, false, false, 19), 'row');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'row');
        yield "
    </div>
    <div class=\"d-flex gap-2\">
        <button class=\"btn btn-primary\" type=\"submit\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</button>
        <a class=\"btn btn-secondary\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.index");
        yield "\">Annuler</a>
    </div>
";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formationForm"]) || array_key_exists("formationForm", $context) ? $context["formationForm"] : (function () { throw new RuntimeError('Variable "formationForm" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/formations/_form.html.twig";
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
        return array (  98 => 28,  93 => 26,  89 => 25,  83 => 22,  77 => 19,  70 => 15,  64 => 12,  56 => 7,  50 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formationForm) }}
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            {{ form_row(formationForm.title) }}
        </div>
        <div class=\"col-md-6 mb-3\">
            {{ form_row(formationForm.publishedAt) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            {{ form_row(formationForm.videoId) }}
        </div>
        <div class=\"col-md-6 mb-3\">
            {{ form_row(formationForm.playlist) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_row(formationForm.categories) }}
    </div>
    <div class=\"mb-3\">
        {{ form_row(formationForm.description) }}
    </div>
    <div class=\"d-flex gap-2\">
        <button class=\"btn btn-primary\" type=\"submit\">{{ submit_label }}</button>
        <a class=\"btn btn-secondary\" href=\"{{ path('admin.formations.index') }}\">Annuler</a>
    </div>
{{ form_end(formationForm) }}
", "admin/formations/_form.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\admin\\formations\\_form.html.twig");
    }
}
