<?php
	class AboutusController extends Controller {
		public function index() {

			$pages_collection = new PagesCollection();
			$pages = $pages_collection->get_all();

			$this->loadView('website/aboutus', array(
				'pages' => $pages
			));
		}
	}