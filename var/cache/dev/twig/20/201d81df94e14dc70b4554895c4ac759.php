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

/* admin/playlists/index.html.twig */
class __TwigTemplate_8db28c8a177d7f9db667bca26a3c54ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/playlists/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"d-flex justify-content-between align-items-center mt-4 mb-3\">
        <h1 class=\"h3 mb-0\">Gestion des playlists</h1>
        <a class=\"btn btn-primary\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.new");
        yield "\">Ajouter une playlist</a>
    </div>

    <table class=\"table table-striped table-bordered align-middle\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Nombre de formations</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 20
            yield "                <tr>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "nombreformations", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "description", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "description", [], "any", false, false, false, 23), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "description", [], "any", false, false, false, 23)) > 100)) ? ("...") : (""))), "html", null, true)) : (yield ""));
            yield "</td>
                    <td class=\"text-nowrap\">
                        <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">Modifier</a>
                        <form method=\"post\" action=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette playlist ?');\">
                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-center\">Aucune playlist.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/playlists/index.html.twig";
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
        return array (  134 => 36,  125 => 32,  114 => 26,  110 => 25,  105 => 23,  101 => 22,  97 => 21,  94 => 20,  89 => 19,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mt-4 mb-3\">
        <h1 class=\"h3 mb-0\">Gestion des playlists</h1>
        <a class=\"btn btn-primary\" href=\"{{ path('admin.playlists.new') }}\">Ajouter une playlist</a>
    </div>

    <table class=\"table table-striped table-bordered align-middle\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Nombre de formations</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for playlist in playlists %}
                <tr>
                    <td>{{ playlist.name }}</td>
                    <td>{{ playlist.nombreformations }}</td>
                    <td>{{ playlist.description ? playlist.description|slice(0, 100) ~ (playlist.description|length > 100 ? '...' : '') : '' }}</td>
                    <td class=\"text-nowrap\">
                        <a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('admin.playlists.edit', {id: playlist.id}) }}\">Modifier</a>
                        <form method=\"post\" action=\"{{ path('admin.playlists.delete', {id: playlist.id}) }}\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette playlist ?');\">
                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center\">Aucune playlist.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/playlists/index.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\admin\\playlists\\index.html.twig");
    }
}
