<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

abstract class Type
{
    protected $path;
    protected $file = [];
    protected $unlink;

    protected $data;

    public function setPath($path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param array $file
     *                    $file = [
     *                    'name' => basename($ftpFile),
     *                    'size' => filesize($ftpFile),
     *                    'path' => $ftpFile,
     *                    ]
     */
    public function setFile(array $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function getFile(): array
    {
        if (function_exists('fn_attachments_get_current_attachment_by_url')) {
            return $this->file;
        }
        return array_filter([$this->file]);
    }

    public function after()
    {
        if (file_exists($this->unlink)) {
            unlink($this->unlink);
        }
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function addUnlink($path)
    {
        $this->unlink = $path;
    }

    abstract public function process();

    abstract public function getType(): string;
}
