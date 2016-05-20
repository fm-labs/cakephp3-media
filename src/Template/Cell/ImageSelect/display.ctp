<?php
$imageActions = [
    [
        __d('banana','Select Image'),
        ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'setImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
        ['class' => 'btn btn-sm btn-default link-frame-modal', 'icon' => 'folder', 'role' => 'button']
    ],
    [
        __d('banana','Remove Image'),
        ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'deleteImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
        ['class' => 'btn btn-sm btn-danger', 'icon' => 'remove', 'role' => 'button']
    ]
];

if ($multiple) {
    $out = $this->element('Media.image_files', [
        'label' => $label,
        'images' => $image,
        'imageOptions' => $imageOptions,
        'imageActions' => [
            [
                __d('banana','Remove Image'),
                ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'deleteImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
                ['class' => 'btn btn-sm btn-danger', 'icon' => 'remove', 'role' => 'button']
            ]
        ],
        'actions' => [
            [
                __d('banana','Select Image'),
                ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'setImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
                ['class' => 'btn btn-sm btn-default link-frame-modal', 'icon' => 'folder', 'role' => 'button']
            ]
        ]
    ]);
} else {
    $out = $this->element('Media.image_file', [
        'label' => $label,
        'image' => $image,
        'imageOptions' => $imageOptions,
        'imageActions' => [
            [
                __d('banana','Select Image'),
                ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'setImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
                ['class' => 'btn btn-sm btn-default link-frame-modal', 'icon' => 'folder', 'role' => 'button']
            ],
            [
                __d('banana','Remove Image'),
                ['plugin' => 'Media', 'controller' => 'MediaManager', 'action' => 'deleteImage', $id, 'scope' => $scope, 'model' => $model, 'id' => $id, 'config' => $config ],
                ['class' => 'btn btn-sm btn-danger', 'icon' => 'remove', 'role' => 'button']
            ]
        ],
        'actions' => []
    ]);
}
echo $out;
?>