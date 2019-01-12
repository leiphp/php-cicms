INSERT INTO `<$model_field_tablename>` ( `modelid`, `field`, `name`, `minlength`, `maxlength`, `status`, `listorder`, `setting`, `formtype`, `tips`, `issystem`, `isunique`, `errortips`, `pattern`) VALUES
(<$modelid>, 'catid', '栏目', 0, 0, 0, 10, 'array (\n  ''width'' => ''700'',\n  ''height'' => ''300'',\n  ''defaultvalue'' => '''',\n)', 'catid', '', 1, 1, '', ''),
( <$modelid>, 'title', '标题', 3, 100, 0, 9, 'array (\n  ''size'' => ''60'',\n  ''defaultvalue'' => '''',\n)', 'text', '', 1, 1, '', ''),
( <$modelid>, 'des', '描述', 0, 0, 0, 7, 'array (\n  ''width'' => ''700'',\n  ''height'' => ''46'',\n  ''defaultvalue'' => '''',\n)', 'textarea', '', 1, 0, '', ''),
( <$modelid>, 'image', '封面图片', 0, 0, 0, 6, 'array (\n  ''upload_allowext'' => ''gif|jpg|png|jpeg|bmp'',\n)', 'image', '', 1, 0, '', ''),
( <$modelid>, 'position', '推荐位', 0, 0, 0, 5, '', 'position', '', 1, 0, '', ''),
(<$modelid>, 'content', '内容', 0, 0, 0, 4, 'array (\n  ''width'' => ''700'',\n  ''height'' => ''300'',\n  ''defaultvalue'' => '''',\n)', 'editor', '', 1, 0, '', ''),
(<$modelid>, 'status', '通过审核', 0, 0, 0, 3, '', 'status', '', 1, 0, '', ''),
(<$modelid>, 'uptime', '发布时间', 0, 0, 0, 3, '', 'datetime', '', 1, 0, '', ''),
(<$modelid>, 'hits', '点击次数', 0, 0, 0, 2, 'array (\n  ''size'' => ''20'',\n  ''defaultvalue'' => ''0'',\n)', 'text', '', 1, 0, '', ''),
(<$modelid>, 'keyword', '关键字', 0, 0, 0, 8, 'array (\n  ''size'' => ''40'',\n  ''defaultvalue'' => '''',\n)', 'text', '多关键词之间用空格或者“,”隔开', 1, 0, '', '');