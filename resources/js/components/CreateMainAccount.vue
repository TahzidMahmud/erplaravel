<template>

         <div class="card card-success col-md-12 col-sm-12 col-12">
            <div class="card-header">
              <h3 class="card-title">Create Main Account</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-8">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Account Code</label>
                      <input type="text"  v-model="acccode" class="form-control" placeholder="Enter ...">
                       <div class="form-check">
                        <input class="form-check-input" type="radio" v-model="codegen" value="user" name="user" id="user" checked>
                        <label class="form-check-label">User</label>

                        <input class="form-check-input ml-2" value="auto" type="radio"  v-model="codegen" name="auto" id="auto">
                        <label class="form-check-label ml-4">Auto Generate</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group">
                      <label>Account Type</label>
                      <select v-model="account_type" class="form-control">
                        <option>--Select--</option>
                        <option value="Asset">Asset</option>
                        <option value="Liability">Liability</option>
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Account Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Use Of Account</label>
                      <select v-model="account_use" class="form-control">
                        <option>--Select--</option>
                        <option value="AP">AP</option>
                        <option value="AR">AR</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank">Bank</option>
                        <option value="Ledger">Ledger</option>
                      </select>
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Account Source</label>
                      <select v-model="account_source" class="form-control">
                        <option>--Select--</option>
                        <option value="None">None</option>
                        <option value="Sub-Account">Sub-Account</option>
                        <option value="Customer">Customer</option>
                        <option value="Supplier">Supplier</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-1 (Optional)</label>
                      <select v-model="level1" class="form-control">
                        <option>--Select--</option>
                        <option value="Asset">Asset</option>
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                        <option value="Liability">Liability</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-2 (Optional)</label>
                      <select v-model="level2" class="form-control">
                        <option>--Select--</option>
                        <option value="Current Asset">Current Asset</option>
                        <option value="Current Liability">Current Liability</option>
                        <option value="Non-Current Asset">Non-Current Asset</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-3 (Optional)</label>
                      <select v-model="level3" class="form-control">
                        <option>--Select--</option>
                        <option value="Long term liability">Long term liability</option>
                        <option value="Inter current asset">Inter current asset</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>

</template>

<script>
    export default {
    props: {
        questions: Array,
        default: []
    },
    data: () => ({
       acccode:"",
       codegen:"user",
       account_type:"",
       account_desc:"",
       account_use:"",
       account_source:"",
       level1:"",
       level2:"",
       level3:""
    }),
    mounted() {
        //    this.fill_arr();
    },
    watch: {
    codegen: function (val) {
      this.generate_code(val);

    },
    methods:{
        generate_code(val){
            this.codegen=val;
        }
    }
  }

    }
</script>

<style lang="scss" scoped>

</style>
