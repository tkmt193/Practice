<?php

abstract class Module_MoneyTree_Schema_Base {

    /**
     * Schemaを配列化します（主にログ出力時ぐらいしか使うことを想定してません）
     *
     * @return array
     */
    public function to_array(): array
    {
        $obj_to_array = get_object_vars($this);
        return $this->array_recursive($obj_to_array);
    }

    /**
     * 2次元以降の階層を再帰的に配列化
     *
     * @return array
     */
    private function array_recursive(array $obj_to_array): array
    {
        $new_array = [];
        foreach ($obj_to_array as $name => $property) {
            if (is_array($property)) {
                $new_array[$name] = $this->array_recursive($property);
            } elseif ($property instanceof self) {
                $new_array[$name] = $this->array_recursive(get_object_vars($property));
            } else {
                $new_array[$name] = $property;
            }
        }
        return $new_array;
    }

    /**
     * 指定された子クラスを作成します。
     *
     * @param string $child_obj_name
     * @param array $target_array
     * @return array<Module_MoneyTree_Schema_Base>
     */
    final protected function make_children(string $child_obj_name, array $target_array): array
    {
        return array_map(
            fn (array $target) => new $child_obj_name($target), $target_array
        );
    }
}
