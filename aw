local vu = game:GetService("VirtualUser")
game:GetService("Players").LocalPlayer.Idled:connect(function()
   vu:Button2Down(Vector2.new(0,0),workspace.CurrentCamera.CFrame)
   wait(1)
   vu:Button2Up(Vector2.new(0,0),workspace.CurrentCamera.CFrame)
end)
wait()

loadstring(game:HttpGet("https://gist.github.com/z4gs/29e7c8076966e170537b3e2f71a977f9/raw"))()
