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

/* admin/playlists/_form.html.twig */
class __TwigTemplate_5fbf4a09eed5f5e816cff2a54285018b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playlistForm"]) || array_key_exists("playlistForm", $context) ? $context["playlistForm"] : (function () { throw new RuntimeError('Variable "playlistForm" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"mb-3\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlistForm"]) || array_key_exists("playlistForm", $context) ? $context["playlistForm"] : (function () { throw new RuntimeError('Variable "playlistForm" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row');
        yield "
    </div>
    <div class=\"mb-3\">
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlistForm"]) || array_key_exists("playlistForm", $context) ? $context["playlistForm"] : (function () { throw new RuntimeError('Variable "playlistForm" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row');
        yield "
    </div>
    <div class=\"d-flex gap-2\">
        <button class=\"btn btn-primary\" type=\"submit\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</button>
        <a class=\"btn btn-secondary\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.index");
        yield "\">Annuler</a>
    </div>
";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playlistForm"]) || array_key_exists("playlistForm", $context) ? $context["playlistForm"] : (function () { throw new RuntimeError('Variable "playlistForm" does not exist.', 12, $this->source); })()), 'form_end');
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
        return "admin/playlists/_form.html.twig";
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
        return array (  70 => 12,  65 => 10,  61 => 9,  55 => 6,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(playlistForm) }}
    <div class=\"mb-3\">
        {{ form_row(playlistForm.name) }}
    </div>
    <div class=\"mb-3\">
        {{ form_row(playlistForm.description) }}
    </div>
    <div class=\"d-flex gap-2\">
        <button class=\"btn btn-primary\" type=\"submit\">{{ submit_label }}</button>
        <a class=\"btn btn-secondary\" href=\"{{ path('admin.playlists.index') }}\">Annuler</a>
    </div>
{{ form_end(playlistForm) }}
", "admin/playlists/_form.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\admin\\playlists\\_form.html.twig");
    }
}
