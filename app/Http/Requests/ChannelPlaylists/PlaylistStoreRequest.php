<?php

namespace App\Http\Requests\ChannelPlaylists;

use Illuminate\Foundation\Http\FormRequest;

class PlaylistStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $channel = $this->route('channel');

        return $channel->ownedBy($this->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:25',
        ];
    }
}