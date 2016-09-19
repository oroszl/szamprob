def PlotWords(Person1,Person2):
    df2["Word"]=df.index
    df2["Word"]=df.apply(lambda x: CutOff(x,Person1,Person2,0.0006),axis=1)

    output_file(Person1+"_"+Person2+"_WordFreq.html")
    r = figure(plot_width=800)
    source = ColumnDataSource(df2)

    r.scatter(Person1, Person2, source=source)
    labels = LabelSet(x=Person1, y=Person2, text="Word",
                      text_font_size="8pt", text_color="#555555",
                      source=source, text_align='center',)

    r.add_layout(labels)

    r.xaxis.axis_label=Person1
    r.yaxis.axis_label=Person2

    r.line([0,0.05],[0,0.05])
    
    show(r)
