def PlotWords(Person1,Person2):
    df["Word"]=df.index
    df["Word"]=df.apply(lambda row: CutOff(row,Person1,Person2,0.0004),axis=1)

    p = figure(plot_width=800)
    p.xaxis.axis_label=Person1
    p.yaxis.axis_label=Person2

    source = ColumnDataSource(df)

    p.scatter(Person1, Person2, source=source)
    labels = LabelSet(x=Person1, y=Person2, text="Word",
                      text_font_size="8pt", text_color="#555555",
                      source=source, text_align='center',)

    p.add_layout(labels)

    p.line([0,0.05],[0,0.05])
    
    output_file(Person1+"_"+Person2+"_WordFreq.html")
    show(p)
