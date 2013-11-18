from django.shortcuts import render
from django.http import HttpResponse
from input.forms import InputForm
#from input import History
def donation_form(request):
	if request.method == 'POST':
		form = InputForm(request.POST)
		if form.is_valid():
			cd = form.cleaned_data
			return render(request, 'report.html',{report:cd['status']})
	form = InputForm()
	return render(request, 'input_form.html', {'form':form})# Create your views here.
