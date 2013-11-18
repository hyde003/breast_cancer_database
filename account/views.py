from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.http import HttpResponseRedirect
from django.shortcuts import render

def physician_login(request):
	if request.method == 'POST':
		form=InputForm(request.POST)
		if form.is_valid():
			cd=form.cleaned_data
			return render(request, 'repo.html',{report:cd['status']})
	form=InputForm()
	return render(request, 'doctor_login.html', {'form':form})
def register(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            new_user = form.save()
            return HttpResponseRedirect("/books/")
    else:
        form = UserCreationForm()
    return render(request, "doctor_handler.html", {
        'form': form,
    })
