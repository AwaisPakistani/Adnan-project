<style>
    $white: #fff;
$black: #000;

$blue: #1c7ac0;
$blue-dark: #105eb2;

$red: #d50019;
$green: #97bc0e;

$grey-form: #a4a4a4;

$progress-bar-bg: #bbb;
$progress-bar-fg: $blue;

@mixin clearfix {
  &:after {
    display: table;
    content: '';
    clear: both;
  }
}

* {
  box-sizing: border-box;
}

section.form-section {
  padding: 15px;

  .form-container {
    border-radius: 15px;
    border: 3px solid $grey-form;
    padding: 15px;
    position: relative;

    .back-link {
      font-size: 10px;
      padding-left: 5px;

      a {
        text-decoration: underline;
      }
    }

    .progress-bar {
      border-radius: 10px;
      margin: 10px 0 0;
      background-color: $progress-bar-bg;
      height: 20px;
      overflow: hidden;
      width: 100%;

      .progress-bar-fg {
        background-color: $progress-bar-fg;
        height: 20px;
        transition: all linear .5s;

        &.one-third {
          width: 33%;
        }
        &.two-thirds {
          width: 66%;
        }
        &.one-quarter {
          width: 25%;
        }
        &.one-half {
          width: 50%;
        }
        &.three-quarters {
          width: 75%;
        }
        &.one-fifth {
          width: 20%;
        }
        &.two-fifths {
          width: 40%;
        }
        &.three-fifths {
          width: 60%;
        }
        &.four-fifths {
          width: 80%;
        }
        &.done {
          width: 100%;
        }
      }
    }

    label {
      font-size: 12px;
      color: $blue-dark;
      font-weight: 700;

      p {
        margin: 0;
      }
    }

    .form-step-container {
      position: relative;
      margin-top: 20px;
    }

    .form-step {
      width: 100%;
      transition: all linear .3s;

      &.ng-hide-add {
        position: absolute;
        opacity: 1;
        top: 0;
      }
      &.ng-hide {
        opacity: 0;
      }
      &.ng-hide-remove {
        opacity: 0;
      }
    }

    .form-row {
      @include clearfix;
      margin-bottom: 10px;
    }

    .form-column {
      position: relative;
      padding-right: 20px;

      &:last-child {
        padding-right: 0;
      }

      input, select {
        width: 100%;
      }
    }

    .zip-column,
    .city-column,
    .dob-column {
      width: 30%;
      float: left;
    }

    .state-column {
      width: 40%;
      float: left;
    }

    .name-column,
    .address-column,
    .country-column,
    .phone-column,
    .email-column {
      width: 50%;
      float: left;
    }

    .phone-field {
      width: 30%;
      float: left;
      padding-right: 3%;

      &:last-child {
        width: 40%;
        padding-right: 0;
      }
    }

    .form-field {
      font-size: 14px;
      height: 42px;
      border: 1px solid #ccc;
      background-color: $white;
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      font-weight: 400;
      padding: 5px;
      width: 100%;
      position: relative;

      &.error {
        border-color: $red;
      }
    }

    .input-wrapper {
      position: relative;
      display: block;

      &:after {
        font-family: FontAwesome;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 22px;
      }

      &.error:after {
        content: '\f05c';
        color: $red;
      }

      &.valid:after {
        content: '\f05d';
        color: $green;
      }
    }

    .select-wrapper {
      position: relative;

      &:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        top: 7px;
        right: 10px;
        border-style: solid;
        border-width: 5px 5px 0 5px;
        border-color: $black transparent transparent transparent;
      }
    }

    .error-msg {
      color: $red;
      font-size: 10px;
    }

    .disclaimer {
      font-size: 12px;
    }

    .submit-button {
      text-align: center;
      margin-top: 15px;

      button {
        border-radius: 5px;
        border: none;
        padding: 10px 10px;
        background-color: $red;
        color: #fff;
        font: bold 16px Arial;
        text-transform: uppercase;
        box-shadow: 0 1px 3px #999;
        width: 100%;
      }
    }
  }
}
</style>
<section class="form-section" data-ng-app="form" data-multi-step-form>
  <div class="form-container">
    <div class="progress-bar">
      <div class="progress-bar-fg" data-ng-class="progressClass()"></div>
    </div>
    <div class="back-link" data-ng-show="formStep > 0">
      <a href="#" data-ng-click="formStep = formStep - 1">&lt; back</a>
    </div>
    <div class="form-step-container">
      <form class="form-step form-step-one" name="step_one" data-ng-show="formStep == 0" data-ng-submit="submitStep('step_one')">
        <label>
          <p>Choose your interest:</p>
          <select class="form-field" name="interest" data-ng-model="formData.step_one.interest" data-ng-class="{'error':error('interest')}" data-required>
            <option value="">Select...</option>
            <option value="dogs">Dogs</option>
            <option value="cats">Cats</option>
          </select>
          <div class="error-msg" data-ng-show="error('interest')" data-ng-bind="error('interest')"></div>
        </label>
        <div class="submit-button">
          <button type="submit">next step</button>
        </div>
      </form>
    </div>
    <div class="form-step-container">
      <form class="form-step form-step-two" name="step_two" data-bh-form data-ng-show="formStep == 1" data-ng-submit="submitStep('step_two')">
        <div class="form-row">
          <div class="form-column zip-column">

            <label class="zip-field">
              <p>Zip:</p>
              <input type="text" data-number-field="true" class="form-field" name="zipcode" data-ng-model="formData.step_two.zipcode" data-required data-ng-class="{'error':error('zipcode')}" maxlength="5">
              <div class="error-msg" data-ng-show="error('zipcode')" data-ng-bind="error('zipcode')"></div>
            </label>
          </div>
          <div class="form-column city-column">
            <label class="city-field">
              <p>City:</p>
              <input type="text" class="form-field" name="city" data-ng-model="formData.step_two.city" data-required data-ng-class="{'error':error('city')}">
              <div class="error-msg" data-ng-show="error('city')" data-ng-bind="error('city')"></div>
            </label>
          </div>
          <div class="form-column state-column">
            <label class="state-field">
              <p>Breed:</p>
              <select class="form-field" name="state" data-ng-model="formData.step_two.state" data-required data-ng-class="{'error':error('state')}" data-breed-field="step_one,interest" data-ng-options="v.key as k for (k, v) in options | dogFilter:dogs">
                <option value="">Select...</option>
              </select>
              <div class="error-msg" data-ng-show="error('state')" data-ng-bind="error('state')"></div>
            </label>
          </div>
        </div>
        <div class="submit-button">
          <button type="submit">next step</button>
        </div>
      </form>
    </div>
    <div class="form-step-container">
      <form class="form-step form-step-three" name="step_three" data-bh-form data-ng-show="formStep == 2" data-ng-submit="submitStep('step_three')">
        <div class="form-row">
          <div class="form-column name-column">
            <label>
              <p>First Name:</p>
              <span class="input-wrapper" data-ng-class="{'error':error('first_name'),valid:valid('step_three','first_name')}">
                <input type="text" class="form-field" name="first_name" data-ng-model="formData.step_three.first_name" data-required data-ng-class="{'error':error('first_name')}" data-validate-on-blur>
              </span>
              <div class="error-msg" data-ng-show="error('first_name')" data-ng-bind="error('first_name')"></div>
            </label>
          </div>
          <div class="form-column name-column">
            <label>
              <p>Last Name:</p>
              <span class="input-wrapper" data-ng-class="{'error':error('last_name'),valid:valid('step_three','last_name')}">
                <input type="text" class="form-field" name="last_name" data-ng-model="formData.step_three.last_name" data-required data-ng-class="{'error':error('last_name')}" data-validate-on-blur>
              </span>
              <div class="error-msg" data-ng-show="error('last_name')" data-ng-bind="error('last_name')"></div>
            </label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-column phone-column" data-multi-field="phone_number">
            <label>
              <p>Main Phone Number:</p>
              <span class="phone-field"><input type="tel" data-number-field class="form-field phone-input" name="area_code" data-ng-model="area_code" maxlength="3" data-min-length="3" data-required data-error="phone_number" data-ng-class="{'error':error('phone_number')}"></span>
              <span class="phone-field"><input type="tel" data-number-field class="form-field phone-input" name="exchange" data-ng-model="exchange" maxlength="3" data-min-length="3" data-required data-error="phone_number" data-ng-class="{'error':error('phone_number')}"></span>
              <span class="phone-field"><input type="tel" data-number-field class="form-field phone-input" name="suffix" data-ng-model="suffix" maxlength="4" data-min-length="4" data-required data-error="phone_number" data-ng-class="{'error':error('phone_number')}"></span>
              <div class="error-msg" data-ng-show="error('phone_number')" data-ng-bind="error('phone_number')"></div>
            </label>
          </div>
          <div class="form-column phone-column">
            <label>
              <p>Alternate Phone:</p>
              <span class="input-wrapper" data-ng-class="{'error':error('phone_number2'),valid:valid('step_three','phone_number2')}">
                <input type="tel" class="form-field" name="phone_number2" data-ng-model="formData.step_three.phone_number2" data-required data-ng-class="{'error':error('phone_number2')}" data-min-length="14" data-phone-mask="(***) ***-****" data-validate-on-blur>
              </span>
              <div class="error-msg" data-ng-show="error('phone_number2')" data-ng-bind="error('phone_number2')"></div>
            </label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-column email-column">
            <label>
              <p>Email:</p>
              <input type="email" class="form-field" name="email" data-ng-model="formData.step_three.email" data-required data-ng-class="{'error':error('email')}">
              <div class="error-msg" data-ng-show="error('email')" data-ng-bind="error('email')"></div>
            </label>
          </div>
          <div class="form-column email-column">
            <label>
              <p>Confirm Email:</p>
              <input type="email" class="form-field" name="confirm_email" data-ng-model="formData.step_three.confirm_email" data-required data-ng-class="{'error':error('confirm_email')}" data-match="email" data-error-msg="Email Addresses Must Match">
              <div class="error-msg" data-ng-show="error('confirm_email')" data-ng-bind="error('confirm_email')"></div>
            </label>
          </div>
        </div>
        <div class="disclaimer" data-disclaimer="phone_number2" data-ng-show="show">
          <p>Disclaimer</p>
        </div>
        <div class="submit-button">
          <button type="submit" data-ng-disabled="disableSubmit">next step</button>
        </div>
      </form>
    </div>
  </div>
</section>
<script>
    "use strict";

angular.module('form', [])

.service('formDataSvc', [function() {
  var scope = this;

  scope.formData = {};

  scope.forms = [];
  scope.registerForm = function(name) {
    scope.forms.push(name);
  };

  scope.fields = {};
  scope.registerField = function(form, model) {
    scope.fields[form] = scope.fields[form] || {};
    scope.fields[form][model.$name] = model;
  };

  scope.setFieldValue = function(fieldName, form, value) {
    form = form.$name ? form.$name : form;
    if (!scope.formData[form])
      scope.formData[form] = {};
    scope.formData[form][fieldName] = value;
  };

  scope.getFieldValue = function(form, field) {
    if (scope.formData[form] && scope.formData[form][field])
      return scope.formData[form][field];
  };

  return scope;
}])

.directive('multiStepForm', ['$http', '$injector', 'formDataSvc', function($http, $injector, formDataSvc) {
  /*
   * Placed above the <form> tags
   * Exposes a controller for registering forms/fields which can be injected into other directives
   */
  return {
    restrict: 'A',
    scope: true,
    controller: ['$scope', function($scope) {
      /*
       * Array of forms
       * Used for determining form class
       */
      this.registerForm = function(name) {
        formDataSvc.registerForm(name);
      };

      /*
       * Field registry
       * Registers a field so its validators may be called on submit
       */
      this.registerField = function(form, model) {
        formDataSvc.registerField(form, model);
      };

      /*
       * Set a form value
       * Used with multi-field directive to set values for fields which have no input
       * For example, phone_1, phone_2, phone_3 values are mapped to phone_number
       */
      this.setFieldValue = function(fieldName, form, value) {
        formDataSvc.setFieldValue(fieldName, form, value);
      };

      /*
       * Getter for form values not associated with an input
       */
      this.getFieldValue = function(form, field) {
        return formDataSvc.getFieldValue(form, field);
      };
    }],
    link: function(scope, elem) {
      /* Initialize some properties */
      scope.formStep = 0;
      scope.formData = {};
      scope.errors = {};

      scope.$watch('formData', function(f) {
        formDataSvc.formData = f;
      });

      scope.$watch(function() {
        return formDataSvc.formData;
      }, function(f) {
        scope.formData = f;
      });

      /* Url encode data */
      function formatData(obj) {
        var parts = [];
        for (var key in obj)
          parts.push([
            encodeURIComponent(key),
            encodeURIComponent(obj[key])
          ].join('='));
        return parts.join('&').replace(/%20/g, "+");
      }

      /* Return any errors under the specified key */
      scope.error = function(field) {
        return scope.errors[field];
      };

      /* Return true if the field has no errors and has been touched by the user */
      scope.valid = function(form, field) {
        return !scope.errors[field] && formDataSvc.fields[form][field].$dirty;
      };

      /* Progress bar class */
      scope.progressClass = function() {
        if (formDataSvc.forms.length === 4) {
          if (scope.formStep === 0) return 'one-fifth';
          if (scope.formStep === 1) return 'two-fifths';
          if (scope.formStep === 2) return 'three-fifths';
          if (scope.formStep === 3) return 'four-fifths';
        } else if (formDataSvc.forms.length === 3) {
          if (scope.formStep === 0) return 'one-quarter';
          if (scope.formStep === 1) return 'one-half';
          if (scope.formStep === 2) return 'three-quarters';
        } else if (formDataSvc.forms.length === 2) {
          if (scope.formStep === 0) return 'one-third';
          if (scope.formStep === 1) return 'two-thirds';
        }
      };

      /*
       * Submit step
       */
      scope.submitStep = function(name, done) {
        /* First, validate all fields */
        scope.errors = {};
        if (formDataSvc.fields[name]) {
          for (var a in formDataSvc.fields[name]) {
            var err = formDataSvc.fields[name][a].validate();
            if (!err) continue;
            for (var key in err)
              scope.errors[key] = err[key];
          }
        }

        /* 
         * Assuming there are no errors:
         * If we are submitting the final step, hit the server
         * Otherwise, advance the formStep
         */
        if (done && angular.equals(scope.errors, {})) {
          scope.disableSubmit = true;
          var data = {};

          angular.forEach(scope.formData, function(stepData, step) {
            angular.forEach(stepData, function(v, k) {
              data[k] = v;
            });
          })

          $http({
            method: 'POST',
            url: window.location.href,
            data: formatData(data),
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/x-www-form-urlencoded'
            }
          }).then(function(response) {
            console.log(response.data);
          });
        } else if (angular.equals(scope.errors, {}))
          scope.formStep++;
      };
    }
  };
}])

.directive('form', [function() {
  /* Register the form with the multi-step controller so we can determine form class */
  return {
    restrict: 'E',
    require: '?^multiStepForm',
    link: function(scope, elem, attrs, multiStepForm) {
      if (!multiStepForm) return;
      multiStepForm.registerForm(attrs.name);
      
      scope.setValue = function(field, form, value) {
        multiStepForm.setFieldValue(field, form, value)
      };
    }
  };
}])

.directive('ngModel', [function() {
  return {
    restrict: 'A',
    require: ['?^multiStepForm', '^form', 'ngModel'],
    link: function(scope, elem, attrs, ctrls) {
      if (!ctrls[0]) return;
      /*
       * Register the field with the multi-step controller and initialize validation array
       */
      ctrls[0].registerField(ctrls[1].$name, ctrls[2]);
      ctrls[2].validators = ctrls[2].validators || [];

      /*
       * Create a validate function on ngModel which runs each validator and returns true if the validator returns true
       */
      ctrls[2].validate = function() {
        for (var a=0; a<ctrls[2].validators.length; a++) {
          var invalid = ctrls[2].validators[a]();
          if (invalid) return invalid;
        }
        return false;
      };
    }
  }
}])

.directive('validateOnBlur', [function() {
  /*
   * Run the field validators on blur or change
   * Only set errors if the field is dirty (has been touched by the user)
   */
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      function validate() {
        var err = ngModel.validate();
        if (!err) delete scope.errors[attrs.name];
        if (ngModel.$dirty)
          for (var key in err)
            scope.errors[key] = err[key];

        scope.$apply();
      }

      elem.on('blur', function() {
        validate();
      });
      // elem.on('keyup', function() {
      //   validate();
      // });
      elem.on('change', function() {
        validate();
      });
    }
  }
}])

.directive('breedField', ['$timeout', function($timeout) {
  return {
    restrict: 'A',
    require: ['^multiStepForm', '^form'],
    link: function(scope, elem, attrs, ctrls) {
      scope.options = {
        huskey: {isDog: true, key: 'h'},
        doberman: {isDog: true, key: 'd'},
        persian: {isDog: false, key: 'p'},
        siamese: {isDog: false, key: 's'}
      };
      
      var args = attrs.breedField.split(',')
      scope.$watch(function() {
        return ctrls[0].getFieldValue(args[0], args[1]);
      }, function(interest) {
        // Do http with interest
        if (interest === 'dogs')
          scope.dogs = true;
        if (interest === 'cats')
          scope.dogs = false;
      });
    }
  };
}])

.filter('dogFilter', function() {
  return function(input, active) {
    if (!input) return input;
    var result = {};
    angular.forEach(input, function(value, key) {
      if (active && value.isDog || !active && !value.isDog)
        result[key] = value;
    });
    return result;
  }
})

.directive('required', ['$timeout', function($timeout) {
  /*
   * Required field validator
   * Register a validator on ngModel that will return true if the field is invalid and visible
   */
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      var key = attrs.error || attrs.name;

      $timeout(function() {
        ngModel.validators.push(function() {
          if (ngModel.$invalid && angular.element(elem).is(':visible')) {
            var error = {};
            error[key] = 'Required';
            return error;
          }
          return false;
        });
      });
    }
  };
}])

.directive('disclaimer', [function() {
  /*
   * Monitor the field specified in the data-disclaimer attribute
   * Set local 'show' property if (parsed) field value length is >= 10
   */
  return {
    restrict: 'A',
    scope: true,
    require: ['^form', '^multiStepForm'],
    link: function(scope, elem, attrs, ctrls) {
      scope.$watch(function() {
        return ctrls[1].getFieldValue(ctrls[0].$name, attrs.disclaimer);
      }, function(phone) {
        if (!phone) return;

        if (phone.replace(/\D/g,'').length >= 10)
          scope.show = true;
      });
    }
  };
}])

.directive('numberField', ['$timeout', function($timeout) {
  return {
    restrict: 'A',
    scope: true,
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      var key = attrs.error || attrs.name;

      /*
       * Register a validator that, if number field attribute is true,
       * will set an error if field value length is less than maxlength attribute
       */
      $timeout(function() {
        if (!attrs.maxlength) return;
        ngModel.validators.push(function() {
          if (attrs.numberField === 'false') return false;
          if (ngModel.$viewValue.length < attrs.maxlength) {
            var error = {};
            error[key] = 'Required';
            return error;
          }
          return false;
        });
      });

      /*
       * On field value change, if number field attribute is true, strip non-digit characters
       */
      ngModel.$viewChangeListeners.push(function(x) {
        if (attrs.numberField === 'true') {
          ngModel.$setViewValue(ngModel.$viewValue.replace(/\D/g, '').substr(0,attrs.maxlength));
          ngModel.$render();
        }
      });
    }
  };
}])

.directive('phoneMask', [function() {
  /*
   * Auto-format phone number while typing
   */
  return {
    restrict: 'A',
    scope: true,
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      function format(value) {
        if (!attrs.phoneMask) return value;

        var pattern = attrs.phoneMask.split('');
        var chars = value.split('');
        var formatted = '';
        var count = 0;

        angular.forEach(pattern, function(c,i) {
          if (chars[count]) {
            if (/\*/.test(c)) {
              formatted += chars[count];
              count++;
            } else {
              formatted += c;
            }
          }
        });

        return formatted;
      }

      ngModel.$viewChangeListeners.push(function(x) {
        ngModel.$setViewValue(format(ngModel.$viewValue.replace(/\D/g, '')));
        ngModel.$render();
      });
    }
  };
}])

.directive('match', ['$timeout', function($timeout) {
  /*
   * Register a validator that will match the field value to the value of the field specified in the data-match attribute
   */
  return {
    restrict: 'A',
    require: ['^form', 'ngModel'],
    link: function(scope, elem, attrs, ctrls) {
      var form = ctrls[0];
      var ngModel = ctrls[1];
      var key = attrs.error || attrs.name;

      $timeout(function() {
        ngModel.validators.push(function() {
          if (form[attrs.match].$viewValue != ngModel.$viewValue && elem.is(':visible')) {
            var error = {};
            error[key] = attrs.errorMsg || 'Values must match';
            return error;
          }
          return false;
        });
      });
    }
  };
}])

.directive('fieldDefault', ['$timeout', function($timeout) {
  /*
   * Specify a default field value on init
   */
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      $timeout(function() {
        ngModel.$setViewValue(attrs.fieldDefault);
        ngModel.$render();
      });
    }
  };
}])

.directive('multiField', [function() {
  /*
   * Parent directive for handling fields with multiple inputs
   * For example, phone number, date of birth, etc
   */
  return {
    restrict: 'A',
    scope: true,
    require: ['^form', '^multiStepForm'],
    controller: ['$scope', function($scope) {
      /* Field registry */
      this.fields = [];
      this.registerInput = function(elem, model) {
        this.fields.push({
          elem: elem,
          model: model
        });
      };

      /* Focus on the next field in the registry */
      this.next = function(e) {
        for (var a=0; a<this.fields.length-1; a++) {
          if (this.fields[a].elem === e)
            this.fields[a+1].elem.focus();
        }
      };

      /* Concatenate registered input values and set field value in multi-step controller */
      this.keyup = function() {
        var value = '';
        angular.forEach(this.fields, function(f) {
          value = [value, f.model.$viewValue ? f.model.$viewValue : ''].join('');
        });
        $scope.update(value);
      };
    }],
    link: function(scope, elem, attrs, ctrls) {
      var form = ctrls[0];
      var multiStepForm = ctrls[1];

      /* Format field value */
      function format(value) {
        if (!attrs.format) return value;

        var pattern = attrs.format.split('');
        var chars = value.split('');
        var formatted = '';
        var count = 0;

        angular.forEach(pattern, function(c,i) {
          if (chars[count]) {
            if (/\*/.test(c)) {
              formatted += chars[count];
              count++;
            } else {
              formatted += c;
            }
          }
        });

        return formatted;
      }

      /* Set field value in the multi-step controller */
      scope.update = function(value) {
        multiStepForm.setFormValue(attrs.multiField, form, format(value));
      };
    }
  };
}])

.directive('minLength', ['$timeout', function($timeout) {
  /*
   * Register a validator that will set an error if the input value length is below the data-min-length value
   */
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, elem, attrs, ngModel) {
      var key = attrs.error || attrs.name;

      $timeout(function() {
        ngModel.validators.push(function() {
          if (ngModel.$viewValue.length < attrs.minLength) {
            var error = {};
            error[key] = attrs.errorMsg || 'Required';
            return error;
          }
          return false;
        });
      });
    }
  };
}])

.directive('phoneInput', [function() {
  /*
   * Register an input with the multi-field controller
   * Listen for input changes and update field value
   */
  return {
    restrict: 'C',
    scope: true,
    require: ['^multiField', 'ngModel'],
    link: function(scope, elem, attrs, ctrls) {
      var parentCtrl = ctrls[0];
      var ngModel = ctrls[1];
      parentCtrl.registerInput(elem, ngModel);

      ngModel.$viewChangeListeners.push(function() {
        parentCtrl.keyup();
        if (attrs.maxlength && ngModel.$viewValue.length == attrs.maxlength)
          parentCtrl.next(elem);
      });
    }
  };
}]);

</script>