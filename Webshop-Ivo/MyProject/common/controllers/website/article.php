<?php

class ArticleController extends Controller {
    public function index() {
		$news_comment_collection = new NewsCommentCollection($_GET['id']);
		$data = $news_comment_collection->get_all();
		
		$news_collection = new NewsCollection();
        $news = $news_collection->get($_GET['id']);
		
		$error=0;
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if (strip_tags(trim($_POST['name'])) != '' && 
				strip_tags(trim($_POST['content'])) != ''
				){
			$comment = new NewsCommentEntity();
			$comment
				->setNewsId($_GET['id'])
				->setName(strip_tags(trim($_POST['name'])))
				->setContent(strip_tags(trim($_POST['content'])));
				
			$news_comment_collection->save($comment);
				
			$news_comment_collection = new NewsCommentCollection($_GET['id']);
			$news_comment_collection->save($comment);
			
			header('Location: index.php?c=article&id='.$_GET['id']);
		}
		$error=1;
		}
			
        $this->loadView('website/article',array(
			'error' =>$error,
			'news' => $news,
			'data' => $data
        ));
    }
	
	
}