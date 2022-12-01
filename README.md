## Must Do

### Modify Voyager image function

This needed so any uploaded image through media picker that has whitespace on its name will be replaced by encoding character. Use **Voyager::image**

    public function image($file, $default = '')
        {
            if (!empty($file)) {
                // return str_replace('\\', '/', Storage::disk(config('voyager.storage.disk'))->url($file));
                
                $out = str_replace('\\', '/', Storage::disk(config('voyager.storage.disk'))->url($file));
                $out = str_replace(' ', '%20', $out);
                return $out;
            }

            return $default;
        }
