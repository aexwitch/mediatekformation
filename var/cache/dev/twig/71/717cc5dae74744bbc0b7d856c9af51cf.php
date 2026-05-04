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

/* admin/formations/index.html.twig */
class __TwigTemplate_62e9bb66050dac18402df3d3fb8ec5f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formations/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formations/index.html.twig", 1);
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
        <h1 class=\"h3 mb-0\">Gestion des formations</h1>
        <a class=\"btn btn-primary\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.new");
        yield "\">Ajouter une formation</a>
    </div>

    <table class=\"table table-striped table-bordered align-middle\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Playlist</th>
                <th>Categories</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 21
            yield "                <tr>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 25));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 26
                yield "                            <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 26), "html", null, true);
                yield "</span>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 28
                yield "                            <span class=\"text-muted\">Aucune</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                    </td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedAtString", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td class=\"text-nowrap\">
                        <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">Modifier</a>
                        <form method=\"post\" action=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette formation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_formation_" . CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 35))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">Aucune formation.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return "admin/formations/index.html.twig";
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
        return array (  163 => 45,  154 => 41,  143 => 35,  139 => 34,  135 => 33,  130 => 31,  127 => 30,  120 => 28,  112 => 26,  107 => 25,  102 => 23,  98 => 22,  95 => 21,  90 => 20,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mt-4 mb-3\">
        <h1 class=\"h3 mb-0\">Gestion des formations</h1>
        <a class=\"btn btn-primary\" href=\"{{ path('admin.formations.new') }}\">Ajouter une formation</a>
    </div>

    <table class=\"table table-striped table-bordered align-middle\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Playlist</th>
                <th>Categories</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for formation in formations %}
                <tr>
                    <td>{{ formation.title }}</td>
                    <td>{{ formation.playlist ? formation.playlist.name : '' }}</td>
                    <td>
                        {% for categorie in formation.categories %}
                            <span class=\"badge bg-secondary\">{{ categorie.name }}</span>
                        {% else %}
                            <span class=\"text-muted\">Aucune</span>
                        {% endfor %}
                    </td>
                    <td>{{ formation.publishedAtString }}</td>
                    <td class=\"text-nowrap\">
                        <a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('admin.formations.edit', {id: formation.id}) }}\">Modifier</a>
                        <form method=\"post\" action=\"{{ path('admin.formations.delete', {id: formation.id}) }}\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette formation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_formation_' ~ formation.id) }}\">
                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">Aucune formation.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/formations/index.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\admin\\formations\\index.html.twig");
    }
}
