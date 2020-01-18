<div class="primary-container">
  <ul class="breadcrumbs">
      <?php
        function clean_text($string) {
          return $string;
        }
        function breadcrumbs($sep = '', $home = 'Home') {
          $unallowed = array('Admin');
          $site = 'https://'.$_SERVER['HTTP_HOST'];
          $crumbs = array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
          $bc = '<li><a href="'.$site.'">'.$home.'</a>'.$sep.'</li>';
          $nm = count($crumbs);
          $i = 1;
          foreach($crumbs as $crumb) {
            $link = ucfirst( clean_text(str_replace( array("","-","_"), array(""," "," ") ,$crumb)) );
            $sep = $i==$nm?'':$sep;
            $site .= '/'.$crumb;
            if(!in_array($link, $unallowed)) {
              if($i == $nm){
                $bc .= '<li><a href="'.$site.'/" class="inactive-breadcrumb">'.clean_text($link).'</a>'.$sep.'</li>';
              } else {
                $bc .= '<li><a href="'.$site.'/">'.clean_text($link).'</a>'.$sep.'</li>';
              }
            }
            $i++;
        }
        return $bc; }
        echo breadcrumbs();
        ?>
  </ul>
</div>
