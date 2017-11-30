<?php

/* index_body.html */
class __TwigTemplate_77edd74ba9917be2f5a121dd90528ddafb0402240d991d9ca1a3df296cd59fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forumrow"]) ? $context["forumrow"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 4
            echo "\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 5
                echo "\t\t";
                $context["nbCate"] = 1;
                // line 6
                echo "\t\t<section class=\"index__cate index__cate--";
                echo (isset($context["nbCate"]) ? $context["nbCate"] : null);
                echo "\">
\t";
            } elseif ((($this->getAttribute(            // line 7
$context["forum"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forum"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forum"], "S_NO_CAT", array()))) {
                // line 8
                echo "\t\t";
                $context["nbCate"] = ((isset($context["nbCate"]) ? $context["nbCate"] : null) + 1);
                // line 9
                echo "\t\t</section>
\t\t<section class=\"index__cate index__cate--";
                // line 10
                echo (isset($context["nbCate"]) ? $context["nbCate"] : null);
                echo "\">
\t";
            }
            // line 12
            echo "
\t";
            // line 13
            if ( !$this->getAttribute($context["forum"], "S_IS_CAT", array())) {
                // line 14
                echo "\t\t<section class=\"index__forum index__forum--";
                echo $this->getAttribute($context["loop"], "index0", array());
                echo "\">
\t\t\t<div class=\"index__forum__bg index__forum__bg--active\"></div>
\t\t\t<button class=\"index__forum__btn\" type=\"button\">";
                // line 16
                echo $this->getAttribute($context["forum"], "FORUM_NAME", array());
                echo "</button>
\t\t\t<div class=\"index__forum__ctn\">
\t\t\t\t<div class=\"index__forum__content\">
\t\t\t\t\t<a href=\"";
                // line 19
                echo $this->getAttribute($context["forum"], "U_VIEWFORUM", array());
                echo "\" class=\"index__forum__title\">";
                echo $this->getAttribute($context["forum"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t<div class=\"index__forum__description\">
\t\t\t\t\t\t";
                // line 21
                echo $this->getAttribute($context["forum"], "FORUM_DESC", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"index__forum__subforums\">
\t\t\t\t\t\t";
                // line 24
                if ($this->getAttribute($context["forum"], "S_LIST_SUBFORUMS", array())) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forum"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t<li class=\"index__forum__subforum\"><a href=\"";
                        echo $this->getAttribute($context["sub"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["sub"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["sub"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-subforum\" aria-hidden=\"true\"></i>";
                        // line 27
                        echo $this->getAttribute($context["sub"], "SUBFORUM_NAME", array());
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 35
            echo "
\t";
            // line 36
            if (($this->getAttribute($context["loop"], "index0", array()) == 6)) {
                // line 37
                echo "\t\t<section class=\"index__forum index__forum--discord\">
\t\t\t<div class=\"index__forum__bg index__forum__bg--active\"></div>
\t\t\t<button class=\"index__forum__btn\" type=\"button\">Discord</button>
\t\t\t<div class=\"index__forum__ctn\">
\t\t\t\t<div class=\"index__forum__content\">
\t\t\t\t\t<a href=\"#\" class=\"index__forum__title\">Discord</a>
\t\t\t\t\t<div class=\"index__forum__description\">
\t\t\t\t\t\tBla Discord
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"index__forum__subforums\">
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 53
            echo "
\t";
            // line 54
            if ($this->getAttribute($context["forum"], "S_LAST_ROW", array())) {
                // line 55
                echo "\t\t</section>
\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
";
        // line 59
        // line 60
        echo "
";
        // line 61
        // line 62
        echo "
<div id=\"qeel\">
";
        // line 64
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 65
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 66
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 67
            echo "\t\t<p>
\t\t\t";
            // line 68
            // line 69
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> 
\t\t\t";
            // line 70
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 71
                echo "\t\t\t\t<br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t\t\t\t";
                // line 72
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</em>";
                }
                // line 73
                echo "\t\t\t";
            }
            // line 74
            echo "\t\t\t";
            // line 75
            echo "\t\t</p>
\t</div>
";
        }
        // line 78
        echo "
";
        // line 79
        // line 80
        echo "
";
        // line 81
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 82
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 85
            // line 86
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 87
            echo "\t\t\t";
            // line 88
            echo "\t\t</p>
\t</div>
";
        }
        // line 91
        echo "
";
        // line 92
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 93
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 94
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 96
            // line 97
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 98
            // line 99
            echo "\t\t</p>
\t</div>
";
        }
        // line 102
        echo "</div>

";
        // line 104
        // line 105
        echo "
";
        // line 106
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 106)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 106,  346 => 105,  345 => 104,  341 => 102,  336 => 99,  335 => 98,  324 => 97,  323 => 96,  318 => 94,  315 => 93,  313 => 92,  310 => 91,  305 => 88,  303 => 87,  277 => 86,  276 => 85,  271 => 83,  268 => 82,  266 => 81,  263 => 80,  262 => 79,  259 => 78,  254 => 75,  252 => 74,  249 => 73,  240 => 72,  235 => 71,  233 => 70,  224 => 69,  223 => 68,  220 => 67,  208 => 66,  205 => 65,  203 => 64,  199 => 62,  198 => 61,  195 => 60,  194 => 59,  191 => 58,  175 => 55,  173 => 54,  170 => 53,  152 => 37,  150 => 36,  147 => 35,  140 => 30,  137 => 29,  129 => 27,  112 => 26,  107 => 25,  105 => 24,  99 => 21,  92 => 19,  86 => 16,  80 => 14,  78 => 13,  75 => 12,  70 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
