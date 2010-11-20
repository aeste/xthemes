<?php
/**
 * Aeste: Monobook without the CSS. The idea is that you
 * customise it using user or site CSS
 *
 * @file
 * @ingroup Skins
 */

if( !defined( 'MEDIAWIKI' ) )
	die( -1 );

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @ingroup Skins
 */
class SkinAeste extends SkinTemplate {
	var $skinname = 'aeste',
	$stylename = 'aeste',
	$template = 'AesteTemplate', $useHeadElement = true;

	function setupSkinUserCss(OutputPage $out) {
	  //parent::setupSkinUserCss($out);
	  $out->addLink(array('href' => 'http://fonts.googleapis.com/css?family=PT+Sans:regular,bold&subset=latin',
			      'rel' => 'stylesheet',
			      'type' => 'text/css'));
	  $out->addStyle('aeste/reset.css','screen');
	  $out->addStyle('aeste/grid.css','screen');
	  $out->addStyle('aeste/main.css','screen');
	  $out->addMeta('http:X-UA-Compatible','IE=8');
	}
}


class AesteTemplate extends QuickTemplate {

  function execute() {
    global $wgRequest;

    $this->skin = $skin  = $this->data['skin'];
    $action = $wgRequest->getText('action');

    wfSuppressWarnings();
    $this->html('headelement');
?>
<div id="wrapper">
   <div id="header" class="row">
   <div class="column grid_3">
   <a href="<?=htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>" title="AESTE" rel="home"><img id="logo" src="<?=$this->data['stylepath'].'/'.$this->data['stylename'].'/logo.png'?>"></a>
   </div>
   <div class="column grid_9">
    <ul class="nav">
    <li><a href="http://www.aeste.my">Home</a></li>
    <li><a href="http://blog.aeste.my">Blog</a></li>
    <li><a href="http://wiki.aeste.my">Wiki</a></li>
    <li><a href="http://www.aeste.my/files">Files</a></li>
    </ul>

   </div>
   </div><!--header-->
   <div id="redbox" class="row">
   <div id="lred" class="column grid_3"><img width="200" height="200" id="quote" src="<?=$this->data['stylepath'].'/'.$this->data['stylename']?>/quote.png"></div>
   <img width="720" height="240" id="banner" src="<?=$this->data['stylepath'].'/'.$this->data['stylename']?>/banner.png"></div><!--redbox-->
   <div class="row wline"></div>
   <div id="container" class="row">   
   <div class="column grid_3 sidebar">
   <?
   foreach ($this->data['sidebar'] as $box => $cont) {
      $this->customBox($box, $cont);
    }
   ?>
   </div><!--sidebar-->
       <div class="column grid_9"><div id="content">
       <h1><?=$this->html('titletext')?></h1>
       <?=$this->html('bodytext')?>

       <?=($this->data['copyright'])?'&nbsp;'.$this->html('copyright'):''?>
       <?=($this->data['lastmod'])?'&nbsp;'.$this->html('lastmod'):''?>
       <?=($this->data['viewcount'])?'&nbsp;'.$this->html('viewcount'):''?>
       </div></div>
   </div><!--container-->

<div class="hline row"></div>
<div id="footer" class="row">
   <div id="lfoot" class="column grid_3">
   <div id="addr" class="">
   <b>Aeste Works (M) S/B</b><br/>
   6-3-6 Queens Avenue<br/>
   Jalan Bayam, Cheras<br/>
   55100 Kuala Lumpur, Malaysia<br/>
   info&#64;aeste.my<br/>
   </div>
   </div><!--lfoot-->
<div id="rfoot" class="column grid_9">
   <div class="row">
   <div class="column grid_9">
    <ul class="nav">

       <?
       foreach ($this->data['personal_urls'] as $menu) {
      print('<li><a href="'.htmlspecialchars($menu['href']).'">'.htmlspecialchars($menu['text']).'</a></li>');
    }
    foreach ($this->data['content_actions'] as $menu) {
      print('<li><a href="'.htmlspecialchars($menu['href']).'">'.htmlspecialchars($menu['text']).'</a></li>');
    }
       ?>

    </ul>
   </div>
   <div id="copyright" class="column grid_9">
	Copyright &copy; 2000-2010 to Aeste Works (M) Sdn Bhd.<br/>All Rights Reserved.
   </div>
  </div>
</div><!--rfoot-->

  </div>
<div class="wline row"></div>
</div><!--wrapper-->

		      <pre><? print_r($this->data); ?></pre>

<?php $this->html('bottomscripts'); /* JS call to runBodyOnloadHook */ ?>
<?php $this->html('reporttime') ?>
<?php if ( $this->data['debug'] ): ?>
<!-- Debug output:
<?php $this->text( 'debug' ); ?>

-->
<?php endif; ?>
</body></html>
<?php
	wfRestoreWarnings();
  }


  function customBox($bar, $cont) {
    print '<h3>';
    $out = wfMsg( $bar ); 
    if (wfEmptyMsg($bar, $out)) {
      echo htmlspecialchars($bar);
    }else{
      echo htmlspecialchars($out);
    }
    print '</h3>';

    if (is_array($cont)) {
      echo "<ul>";    
      foreach($cont as $key => $val) {
	echo '<li><a href="'. htmlspecialchars($val['href']) .'">'. htmlspecialchars($val['text']) .'</a></li>';
      }
      echo "</ul>";
    } else {
      print $cont;
    }
  }

}
