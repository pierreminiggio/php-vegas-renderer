using ScriptPortal.Vegas;
using System;

namespace ShellRenderProject
{
    public class EntryPoint
    {
        public void FromVegas(Vegas myVegas)
        {
            ScriptArgs args = ScriptPortal.Vegas.Script.Args;

            if (! areArgsValid(args)) {
                myVegas.Exit();
                return;
            }

            if (renderProject(
                myVegas,
                args.ValueOf("projectFilePath"),
                args.ValueOf("rendererName"),
                args.ValueOf("templateName"),
                args.ValueOf("outputFilePath")
            ))
            {
                // Success
                myVegas.Exit();
            }
            else
            {
                // Failed
                myVegas.Exit();
            }
            
        }

        public bool renderProject(
            Vegas myVegas,
            string projectFilePath,
            string rendererName,
            string templateName,
            string outputFilePath
        )
        {
            if (myVegas.OpenProject(projectFilePath))
            {
                RenderArgs renderArgs = new RenderArgs(myVegas.Project);
                renderArgs.RenderTemplate = findTemplate(rendererName, templateName, myVegas.Renderers);
                renderArgs.OutputFile = outputFilePath;
                RenderStatus renderStatus = myVegas.Render(renderArgs);
                if (renderStatus == RenderStatus.Complete)
                {
                    return true;
                }
            }

            return false;
        }

        private bool areArgsValid(ScriptArgs args)
        {
            return
                args.Exists("projectFilePath")
                && args.Exists("rendererName")
                && args.Exists("templateName")
                && args.Exists("outputFilePath")
            ;
        } 

        public RenderTemplate findTemplate(string rendererName, string templateName, Renderers renderers)
        {
            foreach (Renderer renderer in renderers)
            {
                if (renderer.Name == rendererName)
                {
                    foreach (RenderTemplate template in renderer.Templates)
                    {
                        if (template.Name == templateName)
                        {
                            return template;
                        }
                    }
                }
            }

            throw new Exception("Template not found");
        }
    }
}
