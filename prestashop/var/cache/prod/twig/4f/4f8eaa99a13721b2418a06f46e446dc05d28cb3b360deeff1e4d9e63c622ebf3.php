<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f52d0dd3d5889bc8f5d273e22c62eb9a4d99887ff752ac16c7f0fa3b77a45714 */
class __TwigTemplate_072380f0b371877852a672aee7932ca447e4db6733dcbbe8beeb84048f9c4307 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Catégories • ESAF</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'BF';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b05bd1d89931967eda496c8f127b99e9';
    var token_admin_orders = tokenAdminOrders = '3fc6092f274e3f746119069641312aa9';
    var token_admin_customers = '6ec9bb858705ec7bca48dd2406591152';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '93e2c024b24b2e2779f77348ff6b393d';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '40965d8b2263243b5940899dd4067c66';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/modules/manage?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8';
    var admin_notification_get_link = '/prestashop/admin257wdmsjorv1yorco2a/i";
        // line 42
        echo "ndex.php/common/notifications?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin257wdmsjorv1yorco2a/index.php/common/notifications/ack?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin257wdmsjorv1yorco2a/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin257wdmsjorv1yorco2a/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin257wdmsjorv1yorco2a\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin257wdmsjorv1yorco2a\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e";
        // line 68
        echo "\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin257wdmsjorv1yorco2a/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin257wdmsjorv1yorco2a/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincategories\"
  data-base-url=\"/prestashop/admin257wdmsjorv1yorco2a/index.php\"  data-token=\"PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminDashboard&amp;token=407f43ffb1c0a876ce56a18ebea4a439\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c287fbcbbe63bb159682845d81b5ad53\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/modules/manage?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8fc1e78ec99d02232a32fb1c49a2db54\"";
        // line 118
        echo "
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/products/new?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories/new?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"36\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories?-ldSWq2YY6Q8\"
        data-post-link=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminQuickAccesses&token=f710f5d5d3aa03c59084d59062c88e10\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Cat&eacute;gories - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminQuickAccesses&token=f710f5d5d3aa03c59084d59062c88e10\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminSearch&amp;t";
        // line 157
        echo "oken=7bd1361df3832ccd20d6c84771e5cdbe\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data";
        // line 174
        echo "-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c287fbcbbe63bb159682845d81b5ad53\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/modules/manage?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8fc1e78ec99d02232a32fb1c49a2db54\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       ";
        // line 211
        echo "href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/products/new?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories/new?token=0d9ac7f4aaa2bf391f85fe1ced0d18e3\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"40\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories?-ldSWq2YY6Q8\"
      data-post-link=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminQuickAccesses&token=f710f5d5d3aa03c59084d59062c88e10\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Cat&eacute;gories - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminQuickAccesses&token=f710f5d5d3aa03c59084d59062c88e10\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en maintenance.</strong></p><p class=&quot;text-left&quot;>Vos clients et visiteurs ne peuvent y accéder actuellement. &amp;lt;br /&amp;gt; Vous pouvez gérer les paramè";
        // line 250
        echo "tres de maintenance dans l&#039;onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/maintenance/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\"
          >
            <i class=\"material-icons\">build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></spa";
        // line 296
        echo "n>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=af4b2e6a347466d1b116f6b0f21d1a4f\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_ord";
        // line 343
        echo "er_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Alladoum kennedy\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Alladoum kennedy</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/employees/1/edit?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminLogin&amp;logout=1&amp;token=db219c57f9fa325d68b0ce710ab52793\">
      <i class=\"material-icons d-lg-none\">power_settin";
        // line 387
        echo "gs_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/employees/toggle-navigation?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminDashboard&amp;token=407f43ffb1c0a876ce56a18ebea4a439\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminDashboard&amp;token=407f43ffb1c0a876ce56a18ebea4a439\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"m";
        // line 435
        echo "aterial-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders/invoices/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders/credit-slips/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2Y";
        // line 464
        echo "Y6Q8\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/orders/delivery-slips/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCarts&amp;token=af4b2e6a347466d1b116f6b0f21d1a4f\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/products?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    ";
        // line 496
        echo "<i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/products?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/monitoring/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                ";
        // line 525
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminAttributesGroups&amp;token=90685a9301fb28169fec729ad655de58\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/brands/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/attachments/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/ind";
        // line 553
        echo "ex.php?controller=AdminCartRules&amp;token=8fc1e78ec99d02232a32fb1c49a2db54\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/stocks/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/customers/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"l";
        // line 585
        echo "ink-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/customers/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/addresses/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCustomerThreads&amp;token=93e2c024b24b2e2779f77348ff6b393d\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-coll";
        // line 614
        echo "apse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCustomerThreads&amp;token=93e2c024b24b2e2779f77348ff6b393d\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/customer-service/order-messages/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminReturn&amp;token=8a85241d33c2bbd2e56172457772497b\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-Admin";
        // line 645
        echo "Stats\">
                    <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminStats&amp;token=c287fbcbbe63bb159682845d81b5ad53\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/modules/manage?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
     ";
        // line 682
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/modules/manage?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/design/themes/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/design/themes/?_token=PAjdK513y1xq";
        // line 710
        echo "qArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/design/mail_theme/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/design/cms-pages/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/design/modules/positions/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cl";
        // line 741
        echo "ass=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminImages&amp;token=617d89bb2a512b9d12593930f8dad10b\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/modules/link-widget/list?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCarriers&amp;token=ed1d4ec2b85d7fba13dd35b4e32f3646\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
 ";
        // line 771
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminCarriers&amp;token=ed1d4ec2b85d7fba13dd35b4e32f3646\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/shipping/preferences/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/payment/payment_methods?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                     ";
        // line 801
        echo "                       </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/payment/payment_methods?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/payment/preferences?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/international/localization/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                    ";
        // line 832
        echo "                                <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/international/localization/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/international/zones/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/international/taxes/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Taxes
                                </a>
                        ";
        // line 859
        echo "      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/improve/international/translations/settings?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/preferences/preferences?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                    ";
        // line 896
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/preferences/preferences?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/order-preferences/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/product-preferences/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin257wdms";
        // line 924
        echo "jorv1yorco2a/index.php/configure/shop/customer-preferences/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/contacts/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/shop/seo-urls/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminSearchConf&amp;token=7b483c742a8db6e65044689c2bea2014\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                  ";
        // line 954
        echo "                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/system-information/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/system-information/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/performance/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"l";
        // line 981
        echo "ink\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/administration/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/emails/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/import/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParent";
        // line 1012
        echo "Employees\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/employees/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/sql-requests/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/logs/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/webservice-keys/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                          ";
        // line 1041
        echo "                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/feature-flags/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/configure/advanced/security/?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\" aria-current=\"page\">Catégories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Cat�";
        // line 1086
        echo "�gories          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\"                  title=\"Ajouter une catégorie\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une catégorie
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-";
        // line 1127
        echo "ldSWq2YY6Q8\"              title=\"Ajouter une catégorie\"            >
              Ajouter une catégorie
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin257wdmsjorv1yorco2a/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=PAjdK513y1xqqArb5SwGqF6hszuRQAL-ldSWq2YY6Q8\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1156
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admin257wdmsjorv1yorco2a/index.php?controller=AdminDashboard&amp;token=407f43ffb1c0a876ce56a18ebea4a439\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1190
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1156
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1190
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__f52d0dd3d5889bc8f5d273e22c62eb9a4d99887ff752ac16c7f0fa3b77a45714";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1355 => 1190,  1334 => 1156,  1323 => 84,  1314 => 1190,  1274 => 1156,  1243 => 1127,  1200 => 1086,  1153 => 1041,  1122 => 1012,  1089 => 981,  1060 => 954,  1028 => 924,  998 => 896,  959 => 859,  930 => 832,  897 => 801,  865 => 771,  833 => 741,  800 => 710,  770 => 682,  731 => 645,  698 => 614,  667 => 585,  633 => 553,  603 => 525,  572 => 496,  538 => 464,  507 => 435,  457 => 387,  411 => 343,  362 => 296,  314 => 250,  273 => 211,  234 => 174,  215 => 157,  174 => 118,  135 => 84,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f52d0dd3d5889bc8f5d273e22c62eb9a4d99887ff752ac16c7f0fa3b77a45714", "");
    }
}
