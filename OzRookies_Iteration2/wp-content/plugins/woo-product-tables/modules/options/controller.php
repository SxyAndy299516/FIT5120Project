<?php
class OptionsControllerWtbp extends ControllerWtbp {
	public function saveGroup() {
		$res = new ResponseWtbp();
		if ($this->getModel()->saveGroup(ReqWtbp::get('post'))) {
			$res->addMessage(esc_html__('Done', 'woo-product-tables'));
		} else {
			$res->pushError ($this->getModel('options')->getErrors());
		}
		return $res->ajaxExec();
	}
	public function getPermissions() {
		return array(
			WTBP_USERLEVELS => array(
				WTBP_ADMIN => array('saveGroup')
			),
		);
	}
}
