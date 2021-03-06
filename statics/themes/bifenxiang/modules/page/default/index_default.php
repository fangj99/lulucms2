<?php
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use source\libs\Resource;
use source\models\Taxonomy;
use source\core\widgets\LinkPager;
use source\libs\DataSource;
/* @var $this yii\web\View */
$this->title = '页面';


?>


<div class="content-wrap">
    <div class="content">
        <?php 
        $this->loopData($rows,'//_inc/content_default');
        $this->showWidget('LinkPager', [
            'pagination' => $pager
        ]);
        ?>
    </div>
</div>
<aside class="sidebar">
    <?php echo $this->render('//_inc/taxonomy',['taxonomyId'=>'page_taxonomy']);?>

    <div class="widget d_postlist">
        <div class="title">
            <h2>热评文章</h2>
        </div>
        <ul>
            <?php
            $datas = $this->getDataSource(null,'comment_count desc',3);
            $this->loopData($datas,'//_inc/item_pic');
            ?>
        </ul>
    </div>
</aside>



