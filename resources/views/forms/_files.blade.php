<fieldset class="files">
    <legend>Adicionar Arquivos <button class="btn btn-success" id="buttonAddFile" title="Adicionar novo arquivo"><i class="fas fa-plus"></i><span class="sr-only">Adicionar novo arquivo</span></button></legend>
    <div class="form-group">
        <label for="inputFileTitle" class="sr-only">T&iacute;tulo do arquivo</label>
        <div class="input-group">
            <input id="inputFileTitle" type="text" name="file[title][]" class="form-control" placeholder="Título">
            <div class="input-group-append">
                <button class="btn btn-danger btn-removeFile" title="Remover novo arquivo"><i class="fas fa-minus"></i><span class="sr-only">Remover novo arquivo</span></button>
            </div>
        </div>
        <input id="inputFile" type="file" name="file[file][]" class="form-control-file">
        <label for="inputFile" class="btn btn-info btn-block">Selecione um arquivo</label>
    </div>
</fieldset>