<?php

namespace Junges\Kafka\Concerns;
use Junges\Kafka\Contracts\CanProduceMessages;
use Junges\Kafka\Contracts\InteractsWithConfigCallbacks as InteractsWithConfigCallbacksContract; 
trait InteractsWithConfigCallbacks
{
    /**
     * @var mixed[]
     */
    protected $callbacks = [];

    /**
     * Set the configuration error callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withErrorCb(callable $callback): InteractsWithConfigCallbacksContract
    {
        $this->callbacks['setErrorCb'] = $callback;

        return $this;
    }

    /**
     * Sets the delivery report callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withDrMsgCb(callable $callback): InteractsWithConfigCallbacksContract
    {
        $this->callbacks['setDrMsgCb'] = $callback;

        return $this;
    }

    /**
     * Set consume callback to use with poll.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withConsumeCb(callable $callback): InteractsWithConfigCallbacksContract
    {
        $this->callbacks['setConsumeCb'] = $callback;

        return $this;
    }

    /**
     * Set the log callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withLogCb(callable $callback): InteractsWithConfigCallbacksContract
    {
        $this->callbacks['setLogCb'] = $callback;

        return $this;
    }

    /**
     * Set offset commit callback to use with consumer groups.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withOffsetCommitCb(callable $callback): CanProduceMessages
    {
        $this->callbacks['setOffsetCommitCb'] = $callback;

        return $this;
    }

    /**
     * Set rebalance callback for  use with coordinated consumer group balancing.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withRebalanceCb(callable $callback): CanProduceMessages
    {
        $this->callbacks['setRebalanceCb'] = $callback;

        return $this;
    }

    /**
     * Set statistics callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function withStatsCb(callable $callback): CanProduceMessages
    {
        $this->callbacks['setStatsCb'] = $callback;

        return $this;
    }
}
