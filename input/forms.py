from django import forms
from input.models import History

class InputForm(forms.ModelForm):
  class Meta:
    model = History
