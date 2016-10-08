FROM andrewosh/binder-base:latest

RUN mkdir /home/main/notebooks
RUN chown main:main /home/main/notebooks
WORKDIR /home/main/notebooks
USER root
RUN conda install -c conda-forge ipywidgets
RUN pip install plotly
RUN /home/main/anaconda2/envs/python3/bin/pip install plotly
COPY . /home/main/notebooks/
RUN chown -R main:main $HOME/notebooks
USER main

RUN find $HOME/notebooks -name '*.ipynb' -exec jupyter trust {} \;




USER main
WORKDIR $HOME/notebooks

