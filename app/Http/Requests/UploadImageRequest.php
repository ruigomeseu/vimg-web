<?php namespace Vimg\Http\Requests;

use Vimg\Http\Requests\Request;

class UploadImageRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'device_id' => 'required',
			'image' => 'required|image'
		];
	}

}
