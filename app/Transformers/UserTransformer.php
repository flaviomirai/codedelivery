<?php

namespace CodeDelivery\Transformers;

use League\Fractal\TransformerAbstract;
use CodeDelivery\Models\User;

/**
 * Class UsersTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class UserTransformer extends TransformerAbstract
{

    protected $availableIncludes = ['client'];
    /**
     * Transform the \Users entity
     * @param \User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'      =>  $model->name,
            'email'     => $model->email,
            'role'      => $model->role,

        ];
    }


    public function includeClient(User $model)
    {

        if ($model->clients()) {
            return $this->item($model->clients, new ClientTransformer());
        }
        else{
            return null;
        }
    }


}
