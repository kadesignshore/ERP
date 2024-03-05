from django.forms import ModelForm
from .models import Lookups

class CustomerForm(ModelForm):
    class Meta:
        model = Lookups
        fields = '__all__'