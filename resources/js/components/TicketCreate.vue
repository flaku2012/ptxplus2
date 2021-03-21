<template>

  <form method="POST">

  <div class="form-group row">
    <label for="surname" class="col-sm-2 col-form-label">Nazwisko</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="surname" name="surname">
    </div>
  </div>

  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Imię</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name">
    </div>
  </div>

  <div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Kategoria</label>
        <div class="col-sm-10">
          <div class="form-group">
            <select class="form-control" id="category" name="category">

            </select>
          </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary pull-success">Zapisz zmiany</button>

  </form>

</template>

<script>
  
  export default {
    
  }

</script>