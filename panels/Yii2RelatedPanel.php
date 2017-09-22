<?php

class Yii2RelatedPanel extends Yii2DebugPanel
{
    /**
    * The name of panel printed in debugger
    */
    public function getName()
    {
    return 'Related';
    }

    /**
    * Return summary html with results of execution in current request.
    * Data is available through $this->data
    */
    public function getSummary()
    {
        return $this->render(dirname(__FILE__) . '/../views/panels/related_bar.php', array(
            'related' => $this->getRelatedRequests(),
//            'time' => number_format($this->data['time'] * 1000) . ' ms',
//            'memory' => sprintf('%.1f MB', $this->data['memory'] / 1048576),
        ));
    }

    /**
    * Return detailed html report with results of execution in current request.
    * Data is available through $this->data
    */
    public function getDetail()
    {
    return '';
    }

    /**
    * Return data required for storing in logs.
    */
    public function save()
    {
    return array();
    }

    public function getRelatedRequests()
    {
        $data = file_get_contents(Yii::app()->getRuntimePath() . '/debug/index.data');
        $data = unserialize($data);
        return;
    }
}