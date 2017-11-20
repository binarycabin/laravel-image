# Laravel-Image
Simple integration for image uploading and linking

## Example

```

public static function create(array $attributes = [])
    {
        $query = static::query();
        $model = $query->create($attributes);
        $model->postSave($attributes);
        return $model;
    }

    public function update(array $attributes = [], array $options = [])
    {
        $updateResponse = parent::update($attributes, $options);
        $this->postSave($attributes);
        return $updateResponse;
    }

    public function postSave(array $attributes = []){
        $this->attributesUpdateImage($attributes);
    }

```